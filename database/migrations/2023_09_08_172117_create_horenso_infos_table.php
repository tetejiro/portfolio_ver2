<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('horenso_infos', function (Blueprint $table) {
            $table->id('horenso_code');
            $table->integer('member_code')->nullable(false)->comment('送り主');
            $table->integer('target_member_code')->nullable(false)->comment('宛先');
            $table->string('title')->nullable(false)->comment('件名');
            $table->string('request')->nullable(true)->comment('依頼内容');
            $table->string('detail')->nullable(true)->comment('詳細');
            $table->string('cause')->nullable(true)->comment('原因');
            $table->string('other')->nullable(true)->comment('その他');
            $table->boolean('rsvp')->nullable(true)->comment('要返信');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horenso_infos');
    }
};
