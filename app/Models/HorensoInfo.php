<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorensoInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'user_id', 'target_user_id', 'title',
        'is_question', 'request_for', 'cause', 'detail',
        'other', 'rsvp'
    ];
}
