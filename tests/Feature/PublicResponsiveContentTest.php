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
