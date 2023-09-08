<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MypageInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'mypage_code', 'member_code',
        'task_content', 'task_start',
        'task_end', 'schedule_status',
        'available_start', 'available_end',
        'caution', 'strong_point_1',
        'strong_point_2', 'strong_point_3'
    ];
}
