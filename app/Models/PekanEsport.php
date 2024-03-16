<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use App\Enums\PekanEsportStatusEnum;

class PekanEsport extends Model
{
    use HasFactory, Notifiable;

    protected $guarded = [""];

    protected $casts = [
        'player_name' => 'array',
        'nickname_player' => 'array',
        'id_player' => 'array',
        'screenshot_profile_player' => 'array',
        'identity_player' => 'array',
        'status' => PekanEsportStatusEnum::class
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Cabor::class, 'game_id');
    }
}
