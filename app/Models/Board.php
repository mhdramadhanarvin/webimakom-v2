<?php

namespace App\Models;

use App\Enums\BoardPositionEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $casts = [
        'position' => BoardPositionEnum::class,
    ];

    protected $fillable = [
        'name',
        'position',
        'facebook',
        'instagram',
        'linkedin',
        'photo',
        'status'
    ];
}
