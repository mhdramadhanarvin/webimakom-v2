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
        } else if ($game == 'dynastones') {
            return view ('pekanesport_games/dynastones');
        } else {
            return view ('pekanesport_games/game_not_found');
        }
    }

    public function form($form): View
    {
        if ($form == 'valorantform') {
            return view ('pekanesport_form/valorantform');
        } else if ($form == 'pubgmform') {
            return view ('pekanesport_form/pubgmform');
        } else if ($form == 'mobilelegendsform') {
            return view ('pekanesport_form/mobilelegendsform');
        } else if ($form == 'freefireform') {
            return view ('pekanesport_form/freefireform');
        } else if ($form == 'psfootballform') {
            return view ('pekanesport_form/psfootballform');
        } else if ($form == 'magicchessform') {
            return view ('pekanesport_form/magicchessform');
        } else {
            return view ('pekanesport_games/game_not_found');
        }
    }
}
