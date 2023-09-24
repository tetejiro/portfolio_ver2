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
        Schema::create('mypage_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable(false);
            $table->string('task_content')->nullable(false);
            $table->dateTime('task_start')->nullable(false);
            $table->dateTime('task_end')->nullable();
            $table->integer('schedule_status')->nullable(false);
            $table->time('available_start')->nullable(false);
            $table->time('available_end')->nullable(false);
            $table->string('caution')->nullable(false);
            $table->string('strong_point_1')->nullable(false);
            $table->string('strong_point_2')->nullable();
            $table->string('strong_point_3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mypage_infos');
    }
};
