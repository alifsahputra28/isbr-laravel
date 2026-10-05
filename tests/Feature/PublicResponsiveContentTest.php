<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicResponsiveContentTest extends TestCase
{
    public function test_home_about_section_uses_responsive_columns_and_fluid_video(): void
    {
        $response = $this->get(route('home', ['locale' => 'id']));

        $response
            ->assertOk()
            ->assertSee('grid min-w-0 grid-cols-1 items-start', false)
            ->assertSee('lg:grid-cols-[0.85fr_1.35fr]', false)
            ->assertSee('aspect-video', false)
            ->assertSee('class="block h-full w-full"', false);
    }

    public function test_priority_hero_images_use_responsive_sources(): void
    {
        $home = $this->get(route('home', ['locale' => 'id']));

        $home
            ->assertOk()
            ->assertSee('assets/images/event/hero-1440.webp', false)
            ->assertSee('assets/images/event/hero-2880.webp', false)
            ->assertSee('fetchpriority="high"', false);

        $this->assertSame(1, substr_count((string) $home->getContent(), 'fetchpriority="high"'));

        $contact = $this->get(route('contact', ['locale' => 'id']));

        $contact
            ->assertOk()
            ->assertSee('assets/images/event/contact-1440.webp', false)
            ->assertSee('assets/images/event/contact-2880.webp', false);

        $this->assertSame(1, substr_count((string) $contact->getContent(), 'fetchpriority="high"'));
    }

    public function test_race_tabs_expose_their_selected_state(): void
    {
        $this->get(route('race-info', ['locale' => 'en']))
            ->assertOk()
            ->assertSee('id="race-tab-overview"', false)
            ->assertSee('aria-selected="true"', false)
            ->assertSee('id="race-tab-schedule"', false)
            ->assertSee('aria-selected="false"', false);
    }

    public function test_official_contact_information_is_visible_in_both_languages(): void
    {
        foreach (['id', 'en'] as $locale) {
            $this->get(route('contact', ['locale' => $locale]))
                ->assertOk()
                ->assertSee('href="mailto:ibsirun@yapista.org"', false)
                ->assertSee('href="https://www.instagram.com/ibnusinabatamrun/"', false)
                ->assertSee('target="_blank"', false)
                ->assertSee('rel="noopener noreferrer"', false)
                ->assertSee('Lubuk Baja Kota, Lubuk Baja, Batam City, Riau Islands 29444');
        }
    }
}
