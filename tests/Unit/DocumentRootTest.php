<?php

namespace Tests\Unit;

use Tests\TestCase;

class DocumentRootTest extends TestCase
{

    public function test_最初の画面の表示(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

}
