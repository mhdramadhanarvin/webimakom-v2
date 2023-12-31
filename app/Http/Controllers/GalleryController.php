<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(): View
    {
        $category = CategoryGallery::all();
        return view('gallery', compact('category'));
    }
}
