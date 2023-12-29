<?php

namespace App\Models;

use App\Enums\DivisionEnum;
use App\Enums\PositionEnum;
use Filament\Actions\Concerns\HasLabel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $casts = [
        'position' => PositionEnum::class,
    ];

    protected $fillable = ['name', 'position', 'user_id', 'division_id', 'photo'];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
