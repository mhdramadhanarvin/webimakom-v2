<?php

namespace App\Http\Controllers;

use App\Models\Board;
use App\Models\Division;
use Illuminate\View\View;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index(): View
    {
        $lead = Board::where('position', '<=', 2)->where('status', true)->get();
        $secretary = Board::where('position', '>', 2)->where('status', true)->get();
        $division = Division::all();
        return view('structure', compact('lead', 'secretary', 'division'));
    }
}
