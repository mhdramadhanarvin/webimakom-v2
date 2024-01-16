<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PekanEsportController extends Controller
{
    public function index(): View
    {
        return view('pekanesport');
    }

    public function game($game): View
    {
        if ($game == 'valorant') {
            return view ('pekanesport_games/valorant');
        } else if ($game == 'pubgm') {
            return view ('pekanesport_games/pubgm');
        } else if ($game == 'mobilelegends') {
            return view ('pekanesport_games/mobilelegends');
        } else if ($game == 'freefire') {
            return view ('pekanesport_games/freefire');
        } else if ($game == 'psfootball') {
            return view ('pekanesport_games/psfootball');
        } else if ($game == 'magicchess') {
            return view ('pekanesport_games/magicchess');
        } else {
            return view ('pekanesport_games/game_not_found');
        }
    }
}
