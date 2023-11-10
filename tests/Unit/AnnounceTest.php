<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class AnnounceTest extends TestCase
{
    use RefreshDatabase;

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
