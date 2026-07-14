<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServicePageTest extends TestCase
{
    public function test_handphone_and_computer_service_page_is_available(): void
    {
        $response = $this->get('/services/handphone-computer');

        $response->assertStatus(200);
        $response->assertSee('Handphone &amp; Komputer', false);
    }
}
