<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use App\Models\User;

class AnnounceTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_周知事項保存()
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post('dashboard', [
                'content' => '========test========='
            ]);

        // リダイレクト先が正しい
        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/dashboard');

        // インサートしたレコードが存在する
        $this->assertDatabaseHas('notices', ['content' => '========test=========']);

        // DB件数が一致する
        $this->assertDatabaseCount('notices', 1);
    }

}
