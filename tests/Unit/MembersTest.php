<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class MembersTest extends TestCase
{
    /**
     * 社員一覧への画面遷移
     */
    use RefreshDatabase;

    public function test_社員一覧ページ表示(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('Member-list');

        $response->assertStatus(200);
    }
}
