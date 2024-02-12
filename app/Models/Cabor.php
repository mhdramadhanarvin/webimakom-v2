<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cabor extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_name'.
        'slug',
        'description',
        'thumbnail'
    ];

    public function registered(): HasMany
    {
        return $this->hasMany(PekanEsport::class, 'game_id', 'id');
    }
}
