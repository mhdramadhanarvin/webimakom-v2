<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workplan extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'link',
        'start_date',
        'end_date'
    ];
}
