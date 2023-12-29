<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): View
    {
        $lead = Board::where('position', '<=', 2)->where('status', true)->get();
        $secretary = Board::where('position', '>', 2)->where('status', true)->get();
        return view('homepage', compact('lead', 'secretary'));
    }
}
