<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorensoInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'horenso_code',
        'member_code',
        'target_member_code',
        'title',
        'detail',
        'other'
    ];
}
