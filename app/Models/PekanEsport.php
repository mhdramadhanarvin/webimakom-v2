<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekanEsport extends Model
{
    use HasFactory;

    protected $guarded = [""];

    protected $casts = [
        'player_name' => 'array',
        'nickname_player' => 'array',
        'id_player' => 'array',
        'screenshot_profile_player' => 'array',
        'identity_player' => 'array',
    ];
}
