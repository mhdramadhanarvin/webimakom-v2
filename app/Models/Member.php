<?php

namespace App\Models;

use App\Enums\MemberPositionEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $casts = [
        'position' => MemberPositionEnum::class,
    ];

    protected $fillable = ['name', 'position', 'division_id', 'photo'];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
