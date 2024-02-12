<?php

namespace App\Models;

use App\Enums\PekanEsportGameEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class PekanEsport extends Model
{
    use HasFactory, Notifiable;

    protected $guarded = [""];

    protected $casts = [
        // 'game_id' => PekanEsportGameEnum::class,
        'player_name' => 'array',
        'nickname_player' => 'array',
        'id_player' => 'array',
        'screenshot_profile_player' => 'array',
        'identity_player' => 'array',
    ];

    public function game(): BelongsTo
    {
        return $this->belongsTo(Cabor::class, 'game_id');
    }
}
