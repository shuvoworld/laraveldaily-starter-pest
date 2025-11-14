<?php
namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_fields_are_present(): void
    {
        // check if email and password fields are present
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSee('email');
        $response->assertSee('password');
    }
}
