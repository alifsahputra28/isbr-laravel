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
            'id' => 'Ibnu Sina Batam Run 2027',
            'en' => 'Ibnu Sina Batam Run 2027',
        ],
        'about' => [
            'id' => 'Tentang | ISBR 2027',
            'en' => 'About | ISBR 2027',
        ],
        'race-info' => [
            'id' => 'Informasi Lomba | ISBR 2027',
            'en' => 'Race Info | ISBR 2027',
        ],
        'race-pack' => [
            'id' => 'Race Pack | ISBR 2027',
            'en' => 'Race Pack | ISBR 2027',
        ],
        'prices' => [
            'id' => 'Harga Pendaftaran | ISBR 2027',
            'en' => 'Registration Prices | ISBR 2027',
        ],
        'podium-prize' => [
            'id' => 'Hadiah Podium | ISBR 2027',
            'en' => 'Podium Prize | ISBR 2027',
        ],
        'faq' => [
            'id' => 'FAQ | ISBR 2027',
            'en' => 'FAQ | ISBR 2027',
        ],
        'terms' => [
            'id' => 'Syarat & Ketentuan | ISBR 2027',
            'en' => 'Terms & Conditions | ISBR 2027',
        ],
        'contact' => [
            'id' => 'Hubungi Kami | ISBR 2027',
            'en' => 'Contact | ISBR 2027',
        ],
        'route' => [
            'id' => 'Rute | ISBR 2027',
            'en' => 'Route | ISBR 2027',
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
                    ->assertSee('<meta property="og:title" content="'.e($titles[$locale]).'">', false)
                    ->assertSee('<meta property="og:url" content="'.$url.'">', false)
                    ->assertSee('<meta name="twitter:card" content="summary_large_image">', false)
                    ->assertSee('<meta name="robots" content="noindex, nofollow">', false)
                    ->assertSee('href="'.route($routeName, ['locale' => $alternateLocale]).'"', false);

                $this->assertSame(1, substr_count((string) $response->getContent(), '<h1'));
            }
        }
    }

    public function test_meta_descriptions_are_unique_and_substantive_in_each_locale(): void
    {
        foreach (['id', 'en'] as $locale) {
            $descriptions = [];

            foreach (array_keys($this->publicPages) as $routeName) {
                $content = (string) $this->get(route($routeName, ['locale' => $locale]))->getContent();

                preg_match('/<meta name="description" content="([^"]+)">/', $content, $matches);

                $this->assertArrayHasKey(1, $matches);

                $description = html_entity_decode($matches[1], ENT_QUOTES | ENT_HTML5, 'UTF-8');
                $this->assertGreaterThanOrEqual(120, mb_strlen($description));
                $this->assertLessThanOrEqual(170, mb_strlen($description));
                $descriptions[] = $description;
            }

            $this->assertCount(count($descriptions), array_unique($descriptions));
        }
    }

    public function test_every_public_page_has_one_descriptive_primary_heading(): void
    {
        $headings = [
            'home' => ['id' => 'IBNU SINA BATAM RUN 2027', 'en' => 'IBNU SINA BATAM RUN 2027'],
            'about' => ['id' => 'Tentang', 'en' => 'About Us'],
            'race-info' => ['id' => 'Informasi Lomba', 'en' => 'Race Information'],
            'race-pack' => ['id' => 'Race Pack', 'en' => 'Race Pack'],
            'prices' => ['id' => 'Harga Pendaftaran', 'en' => 'Registration Prices'],
            'podium-prize' => ['id' => 'Hadiah Podium', 'en' => 'Podium Prize'],
            'route' => ['id' => 'Rute', 'en' => 'Route'],
            'faq' => ['id' => 'Pertanyaan yang Sering Diajukan', 'en' => 'Frequently Asked Questions'],
            'terms' => ['id' => 'Syarat & Ketentuan', 'en' => 'Terms & Conditions'],
            'contact' => ['id' => 'Hubungi Kami', 'en' => 'Contact Us'],
        ];

        foreach ($headings as $routeName => $localizedHeadings) {
            foreach ($localizedHeadings as $locale => $expectedHeading) {
                $content = (string) $this->get(route($routeName, ['locale' => $locale]))->getContent();

                preg_match_all('/<h1\b[^>]*>(.*?)<\/h1>/s', $content, $matches);

                $this->assertCount(1, $matches[1]);

                $heading = html_entity_decode(strip_tags($matches[1][0]), ENT_QUOTES | ENT_HTML5, 'UTF-8');
                $heading = trim((string) preg_replace('/\s+/u', ' ', $heading));

                $this->assertSame($expectedHeading, $heading);
            }
        }
    }

    public function test_homepage_exposes_website_structured_data_without_fake_event_schema(): void
    {
        $home = $this->get(route('home', ['locale' => 'id']));

        $home
            ->assertOk()
            ->assertSee('<script type="application/ld+json">', false)
            ->assertSee('"@type":"WebSite"', false)
            ->assertSee('"name":"Ibnu Sina Batam Run 2027"', false)
            ->assertSee('"alternateName":"ISBR 2027"', false)
            ->assertDontSee('"@type":"Event"', false)
            ->assertDontSee('SearchAction', false);

        $this->get(route('about', ['locale' => 'id']))
            ->assertDontSee('"@type":"WebSite"', false);
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

    public function test_homepage_navigation_exposes_clear_locale_aware_links_to_priority_pages(): void
    {
        foreach (['id', 'en'] as $locale) {
            $response = $this->get(route('home', ['locale' => $locale]))->assertOk();

            foreach (['race-info', 'race-pack', 'prices', 'podium-prize', 'faq', 'contact'] as $routeName) {
                $response->assertSee('href="'.route($routeName, ['locale' => $locale]).'"', false);
            }
        }
    }

    public function test_key_public_content_is_translated_without_changing_race_rules(): void
    {
        $this->get(route('home', ['locale' => 'id']))
            ->assertOk()
            ->assertSee('Beranda')
            ->assertSee("This race isn't simply about running.")
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
