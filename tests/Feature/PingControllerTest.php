<?php

namespace Tests\Feature;

use Tests\TestCase;

class PingControllerTest extends TestCase
{
    public function testPingController(): void
    {
        $response = $this->get('/ping');
        $response->assertStatus(200);
    }
}
