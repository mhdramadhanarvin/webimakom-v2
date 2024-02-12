<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabor extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_name'.
        'slug',
        'description',
        'thumbnail'
    ];
}
