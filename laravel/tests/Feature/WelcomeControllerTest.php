<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeControllerTest extends TestCase
{
    /**
     * Ensure the welcome endpoint returns the expected JSON.
     */
    public function test_welcome_endpoint_returns_message(): void
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200)
                 ->assertJson([
                     'message' => 'Welcome',
                 ]);
    }
}
