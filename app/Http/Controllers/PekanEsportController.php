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
        switch ($game) {
            case 'valorant':
                return view('pekanesport/pekanesport_games/valorant');
                break;

            case 'pubgm':
                return view('pekanesport/pekanesport_games/pubgm');
                break;

            case 'mobilelegends':
                return view('pekanesport/pekanesport_games/mobilelegends');
                break;

            case 'freefire':
                return view('pekanesport/pekanesport_games/freefire');
                break;

            case 'psfootball':
                return view('pekanesport/pekanesport_games/psfootball');
                break;

            case 'magicchess':
                return view('pekanesport/pekanesport_games/magicchess');
                break;

            case 'dynastones':
                return view('pekanesport/pekanesport_games/dynastones');
                break;

            default:
                return view('pekanesport_games/game_not_found');
        }
    }

    public function form($form): View
    {
        switch ($form) {
            case 'valorantform':
                return view('pekanesport/pekanesport_form/formpendaftaran');
                break;

            case 'pubgmform':
                return view('pekanesport/pekanesport_form/formpendaftaran');
                break;

            case 'mobilelegendsform':
                return view('pekanesport/pekanesport_form/formpendaftaran');
                break;

            case 'freefireform':
                return view('pekanesport/pekanesport_form/formpendaftaran');
                break;

            case 'psfootballform':
                return view('pekanesport/pekanesport_form/formpendaftaran');
                break;

            case 'magicchessform':
                return view('pekanesport/pekanesport_form/formpendaftaran');
                break;

            case 'dynastonesform':
                return view('pekanesport/pekanesport_form/formpendaftaran');
                break;

            default:
                return view('pekanesport_games/game_not_found');
        }
    }
}
