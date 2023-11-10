<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\MyPageInfo;

class MyPageTest extends TestCase
{
    /**
     * マイページレコードなし：CreateMyPageへ遷移する
     * マイページレコードあり：ShowMyPageへ遷移する
     * 編集ボタン：画面遷移する(EditMyPage)
     */
    use RefreshDatabase;

    public function test_マイページレコードがないユーザ(): void
    {
        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->get('MyPage');

        $id = $user->id;

        // リダイレクト先が正しい
        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/MyPage/create?MyPage='.$id);
    }

    public function test_マイページレコードがあるユーザ(): void
    {
        $user = User::factory()->create();
        MyPageInfo::create([
            'user_id' => $user->id,
            'task_content' => 'task_content',
            'task_start' => '2023-11-10 04:41',
            'task_end' => null,
            'schedule_status' => 1,
            'available_start' => '10:00',
            'available_end' => '14:00',
            'caution' => 'caution',
            'strong_point_1' => 'strong_point_1',
            'strong_point_2' => 'strong_point_2',
            'strong_point_3' => 'strong_point_3',
        ]);

        $response = $this
            ->actingAs($user)
            ->get('MyPage');

        // リダイレクト先が正しい
        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('MyPage.show', $user->id));
    }

    public function test_編集ボタン()
    {
        $user = User::factory()->create();
        $myPage_id = MyPageInfo::create([
            'user_id' => $user->id,
            'task_content' => 'task_content',
            'task_start' => '2023-11-10 04:41',
            'task_end' => null,
            'schedule_status' => 1,
            'available_start' => '10:00',
            'available_end' => '14:00',
            'caution' => 'caution',
            'strong_point_1' => 'strong_point_1',
            'strong_point_2' => 'strong_point_2',
            'strong_point_3' => 'strong_point_3',
        ]);

        $response = $this
            ->actingAs($user)
            ->get(route('MyPage.edit', $myPage_id->id));

        $response
            ->assertSessionHasNoErrors()
            ->assertStatus(200);
    }
}
