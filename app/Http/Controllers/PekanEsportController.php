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
                return view('pekanesport_games/valorant');
                break;
        
            case 'pubgm':
                return view('pekanesport_games/pubgm');
                break;
        
            case 'mobilelegends':
                return view('pekanesport_games/mobilelegends');
                break;
        
            case 'freefire':
                return view('pekanesport_games/freefire');
                break;
        
            case 'psfootball':
                return view('pekanesport_games/psfootball');
                break;
        
            case 'magicchess':
                return view('pekanesport_games/magicchess');
                break;
        
            case 'dynastones':
                return view('pekanesport_games/dynastones');
                break;
        
            default:
                return view('pekanesport_games/game_not_found');
        }        
    }

    public function form($form): View
    {
        switch ($form) {
            case 'valorantform':
                return view('pekanesport_form/valorantform');
                break;
        
            case 'pubgmform':
                return view('pekanesport_form/pubgmform');
                break;
        
            case 'mobilelegendsform':
                return view('pekanesport_form/mobilelegendsform');
                break;
        
            case 'freefireform':
                return view('pekanesport_form/freefireform');
                break;
        
            case 'psfootballform':
                return view('pekanesport_form/psfootballform');
                break;
        
            case 'magicchessform':
                return view('pekanesport_form/magicchessform');
                break;
        
            default:
                return view('pekanesport_games/game_not_found');
        }        
    }
}
