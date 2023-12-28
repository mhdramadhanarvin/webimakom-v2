<?php

namespace App\Models;

use App\Enums\DivisionEnum;
use App\Enums\PositionEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $casts = [
        'name' => DivisionEnum::class,
    ];

    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }
}
