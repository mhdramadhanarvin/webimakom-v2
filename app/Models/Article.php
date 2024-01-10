<?php

namespace App\Models;

use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model implements CanVisit
{
    use HasFactory, HasVisits;

    protected $fillable = [
        'title',
        'slug',
        'article_category_id',
        'user_id',
        'thumbnail',
        'content',
        'keyword',
        'status'
    ];

    protected $casts = [
        'keyword' => 'array',
    ];

    public function article_category(): BelongsTo
    {
        return $this->belongsTo(ArticleCategory::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
