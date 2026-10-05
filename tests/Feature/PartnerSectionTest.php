<?php

namespace Tests\Feature;

use Tests\TestCase;

class PartnerSectionTest extends TestCase
{
    public function test_indonesian_partner_board_uses_only_approved_local_logos_and_intentional_placeholders(): void
    {
        $response = $this->get(route('home', ['locale' => 'id']));

        $response
            ->assertOk()
            ->assertSee('Mitra Resmi')
            ->assertSee('Institusi dan brand yang mendukung penyelenggaraan Ibnu Sina Batam Run 2027.')
            ->assertSee('Inisiator')
            ->assertSee('Diselenggarakan Oleh')
            ->assertSee('Mitra Hidrasi Resmi')
            ->assertSee('Mitra Pendukung')
            ->assertSee('src="'.asset('assets/images/supports/Logo YAPISTA.webp').'"', false)
            ->assertSee('alt="Yayasan Pendidikan Ibnu Sina Batam"', false)
            ->assertSee('src="'.asset('assets/images/supports/Logo The DOTS.webp').'"', false)
            ->assertSee('alt="The DOTS"', false);

        $this->assertSame(15, substr_count((string) $response->getContent(), 'Interested?'));
        $this->assertSame(15, substr_count((string) $response->getContent(), 'Place Your Logo'));
    }

    public function test_english_partner_board_uses_localized_hierarchy(): void
    {
        $this->get(route('home', ['locale' => 'en']))
            ->assertOk()
            ->assertSee('Official Partners')
            ->assertSee('Organizations and brands supporting Ibnu Sina Batam Run 2027.')
            ->assertSee('Initiator')
            ->assertSee('Organized By')
            ->assertSee('Official Apparel Partner')
            ->assertSee('Supporting Partners');
    }
}
