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

    public function test_dashboard_can_see_cards()
    {
        $user = \App\Models\User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertStatus(200);
        $response->assertSee('Welcome to the dashboard');
    }

}
