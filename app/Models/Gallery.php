<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = ['category_gallery_id', 'caption', 'photo'];

    public function category_gallery(): BelongsTo
    {
        return $this->belongsTo(CategoryGallery::class);
    }
}
