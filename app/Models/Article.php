<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'article_category_id',
        'thumbnail',
        'content',
        'status'
    ];

    public function article_category(): BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class);
    }
}
