<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Workplan;

class WorkplanController extends Controller
{
    public function index(): View
    {
        $workplan = Workplan::orderBy('start_date', 'desc')->get();
        return view('workplan', compact('workplan'));
    }
}
