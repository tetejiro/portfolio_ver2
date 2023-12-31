<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class HistoryTest extends TestCase
{

    /**
     * 質問・報連相履歴への画面遷移
     */
    use RefreshDatabase;

    public function test_質問・報連相履歴ページ表示(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('History');

        $response->assertStatus(200);
    }
}