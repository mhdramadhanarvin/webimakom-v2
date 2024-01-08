<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('article');
    }

    public function detail(): View
    {
        return view('detail-article');
    }
}
