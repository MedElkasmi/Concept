<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{

    /**
     *
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_login()
    {

        $response = $this->post('/login', [
            'email' => 'john@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

    }
}
