<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $all_article = Article::where('status', true)->latest()->paginate(10);
        $article_popular = Article::popularAllTime()->limit(5)->get();
        return view('article', compact('all_article', 'article_popular'));
    }

    public function detail($slug): View
    {
        $article = Article::where('slug', $slug)->withTotalVisitCount()->first();
        if ($article == false) abort(404);
        $article->visit()->withIP();
        $related_article = Article::inRandomOrder()->limit(5)->get();
        return view('detail-article', compact('article', 'related_article'));
    }
}
