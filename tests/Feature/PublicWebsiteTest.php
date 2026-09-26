<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicWebsiteTest extends TestCase
{
    /**
     * @var array<string, string>
     */
    private array $publicPages = [
        'home' => 'Ibnu Sina Batam Run 2027 (ISBR) | Official Event Website',
        'about' => 'About | Ibnu Sina Batam Run 2027',
        'race-info' => 'Race Info | Ibnu Sina Batam Run 2027',
        'race-pack' => 'Race Pack Collection | Ibnu Sina Batam Run 2027',
        'prices' => 'Registration Prices | Ibnu Sina Batam Run 2027',
        'podium-prize' => 'Podium Prize | Ibnu Sina Batam Run 2027',
        'faq' => 'FAQ | Ibnu Sina Batam Run 2027',
        'terms' => 'Terms & Conditions | Ibnu Sina Batam Run 2027',
        'contact' => 'Contact Us | Ibnu Sina Batam Run 2027',
        'route' => 'Race Route | Ibnu Sina Batam Run 2027',
    ];

    public function test_public_pages_are_available_with_unique_seo_metadata(): void
    {
        foreach ($this->publicPages as $routeName => $title) {
            $url = route($routeName);
            $response = $this->get($url);

            $response
                ->assertOk()
                ->assertSee('<title>'.e($title).'</title>', false)
                ->assertSee('<meta name="description"', false)
                ->assertSee('<link rel="canonical" href="'.$url.'">', false)
                ->assertSee('<meta property="og:title"', false)
                ->assertSee('<meta name="twitter:card" content="summary_large_image">', false)
                ->assertSee('<meta name="robots" content="noindex, nofollow">', false);

            $this->assertSame(1, substr_count((string) $response->getContent(), '<h1'));
        }
    }

    public function test_indexing_can_be_enabled_through_configuration(): void
    {
        config(['seo.indexable' => true]);

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('<meta name="robots" content="index, follow, max-image-preview:large">', false);
    }

    public function test_sitemap_contains_only_public_profile_pages(): void
    {
        $response = $this->get(route('sitemap'));

        $response->assertOk()
            ->assertHeader('Content-Type', 'application/xml');

        foreach (array_keys($this->publicPages) as $routeName) {
            $response->assertSee('<loc>'.route($routeName).'</loc>', false);
        }

        $response->assertDontSee('/admin', false)
            ->assertDontSee('/login', false)
            ->assertDontSee('/register', false)
            ->assertDontSee('/checkout', false);
    }

    public function test_unknown_page_uses_branded_not_found_page(): void
    {
        $this->get('/page-that-does-not-exist')
            ->assertNotFound()
            ->assertSee('Page Not Found')
            ->assertSee('Back to Home');
    }
}
