<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StructureController extends Controller
{
    public function index(): View
    {
        $division = Division::all();
        return view('structure', compact('division'));
    }
}
