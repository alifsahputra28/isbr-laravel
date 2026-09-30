<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicWebsiteTest extends TestCase
{
    /**
     * @var array<string, array{id: string, en: string}>
     */
    private array $publicPages = [
        'home' => [
            'id' => 'Ibnu Sina Batam Run 2027 (ISBR) | Website Resmi',
            'en' => 'Ibnu Sina Batam Run 2027 (ISBR) | Official Event Website',
        ],
        'about' => [
            'id' => 'Tentang | Ibnu Sina Batam Run 2027',
            'en' => 'About | Ibnu Sina Batam Run 2027',
        ],
        'race-info' => [
            'id' => 'Informasi Lomba | Ibnu Sina Batam Run 2027',
            'en' => 'Race Information | Ibnu Sina Batam Run 2027',
        ],
        'race-pack' => [
            'id' => 'Race Pack Collection | Ibnu Sina Batam Run 2027',
            'en' => 'Race Pack Collection | Ibnu Sina Batam Run 2027',
        ],
        'prices' => [
            'id' => 'Harga Pendaftaran | Ibnu Sina Batam Run 2027',
            'en' => 'Registration Prices | Ibnu Sina Batam Run 2027',
        ],
        'podium-prize' => [
            'id' => 'Hadiah Podium | Ibnu Sina Batam Run 2027',
            'en' => 'Podium Prize | Ibnu Sina Batam Run 2027',
        ],
        'faq' => [
            'id' => 'FAQ | Ibnu Sina Batam Run 2027',
            'en' => 'FAQ | Ibnu Sina Batam Run 2027',
        ],
        'terms' => [
            'id' => 'Syarat & Ketentuan | Ibnu Sina Batam Run 2027',
            'en' => 'Terms & Conditions | Ibnu Sina Batam Run 2027',
        ],
        'contact' => [
            'id' => 'Hubungi Kami | Ibnu Sina Batam Run 2027',
            'en' => 'Contact Us | Ibnu Sina Batam Run 2027',
        ],
        'route' => [
            'id' => 'Rute Lomba | Ibnu Sina Batam Run 2027',
            'en' => 'Race Route | Ibnu Sina Batam Run 2027',
        ],
    ];

    public function test_root_and_legacy_urls_redirect_to_indonesian_locale(): void
    {
        $this->get('/')->assertRedirect('/id');
        $this->get('/about')->assertRedirect('/id/about');
    }

    public function test_only_supported_locales_are_accepted(): void
    {
        $this->get('/fr')->assertNotFound();
        $this->get('/de/about')->assertNotFound();
        $this->get('/jp/faq')->assertNotFound();
    }

    public function test_bilingual_public_pages_have_localized_content_and_seo_metadata(): void
    {
        foreach ($this->publicPages as $routeName => $titles) {
            foreach (['id', 'en'] as $locale) {
                $url = route($routeName, ['locale' => $locale]);
                $alternateLocale = $locale === 'id' ? 'en' : 'id';
                $alternateUrl = route($routeName, ['locale' => $alternateLocale]);
                $response = $this->get($url);

                $response
                    ->assertOk()
                    ->assertSee('<html lang="'.$locale.'">', false)
                    ->assertSee('<title>'.e($titles[$locale]).'</title>', false)
                    ->assertSee('<meta name="description"', false)
                    ->assertSee('<link rel="canonical" href="'.$url.'">', false)
                    ->assertSee('<link rel="alternate" hreflang="'.$locale.'" href="'.$url.'">', false)
                    ->assertSee('<link rel="alternate" hreflang="'.$alternateLocale.'" href="'.$alternateUrl.'">', false)
                    ->assertSee('<link rel="alternate" hreflang="x-default" href="'.route($routeName, ['locale' => 'id']).'">', false)
                    ->assertSee('<meta property="og:locale" content="'.($locale === 'id' ? 'id_ID' : 'en_US').'">', false)
                    ->assertSee('<meta name="twitter:card" content="summary_large_image">', false)
                    ->assertSee('<meta name="robots" content="noindex, nofollow">', false)
                    ->assertSee('href="'.route($routeName, ['locale' => $alternateLocale]).'"', false);

                $this->assertSame(1, substr_count((string) $response->getContent(), '<h1'));
            }
        }
    }

    public function test_navigation_and_language_switcher_preserve_the_current_locale_and_page(): void
    {
        $this->get(route('race-info', ['locale' => 'en']))
            ->assertOk()
            ->assertSee('href="'.route('about', ['locale' => 'en']).'"', false)
            ->assertSee('href="'.route('faq', ['locale' => 'en']).'"', false)
            ->assertSee('href="'.route('race-info', ['locale' => 'id']).'"', false);

        $this->get(route('faq', ['locale' => 'id']))
            ->assertOk()
            ->assertSee('href="'.route('about', ['locale' => 'id']).'"', false)
            ->assertSee('href="'.route('faq', ['locale' => 'en']).'"', false);
    }

    public function test_key_public_content_is_translated_without_changing_race_rules(): void
    {
        $this->get(route('home', ['locale' => 'id']))
            ->assertOk()
            ->assertSee('Beranda')
            ->assertSee('Lomba ini bukan sekadar tentang berlari.')
            ->assertSee('Interested?');

        $this->get(route('home', ['locale' => 'en']))
            ->assertOk()
            ->assertSee('Home')
            ->assertSee("This race isn't simply about running.")
            ->assertSee('Interested?');

        $this->get(route('race-info', ['locale' => 'id']))
            ->assertSee('All Countries')
            ->assertSee('termasuk WNI dan WNA')
            ->assertSee('90 menit')
            ->assertDontSee('3 unit ambulans');

        $this->get(route('race-info', ['locale' => 'en']))
            ->assertSee('All Countries')
            ->assertSee('including Indonesian and international participants')
            ->assertSee('90 menit')
            ->assertDontSee('3 ambulance units');

        $this->get(route('contact', ['locale' => 'id']))
            ->assertSee('Bagaimana kami dapat membantu Anda?')
            ->assertSee('Kirim Pesan');

        $this->get(route('contact', ['locale' => 'en']))
            ->assertSee('How can we help you?')
            ->assertSee('Submit Message');

        $this->get(route('route', ['locale' => 'id']))->assertSee('Segera Hadir');
        $this->get(route('route', ['locale' => 'en']))->assertSee('Coming Soon');
    }

    public function test_indexing_can_be_enabled_through_configuration(): void
    {
        config(['seo.indexable' => true]);

        $this->get(route('home', ['locale' => 'id']))
            ->assertOk()
            ->assertSee('<meta name="robots" content="index, follow, max-image-preview:large">', false);
    }

    public function test_sitemap_contains_only_bilingual_public_profile_pages(): void
    {
        $response = $this->get(route('sitemap'));

        $response->assertOk()
            ->assertHeader('Content-Type', 'application/xml');

        foreach (array_keys($this->publicPages) as $routeName) {
            foreach (['id', 'en'] as $locale) {
                $response->assertSee('<loc>'.route($routeName, ['locale' => $locale]).'</loc>', false);
            }
        }

        $response->assertSee('hreflang="x-default"', false)
            ->assertDontSee('/admin', false)
            ->assertDontSee('/login', false)
            ->assertDontSee('/register', false)
            ->assertDontSee('/checkout', false);
    }

    public function test_unknown_localized_page_uses_the_matching_language(): void
    {
        $this->get('/id/page-that-does-not-exist')
            ->assertNotFound()
            ->assertSee('Halaman Tidak Ditemukan')
            ->assertSee('Kembali ke Beranda');

        $this->get('/en/page-that-does-not-exist')
            ->assertNotFound()
            ->assertSee('Page Not Found')
            ->assertSee('Back to Home');
    }
}
