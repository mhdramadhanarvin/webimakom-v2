<?php

namespace App\Http\Controllers;

use App\Http\Requests\PekanEsportFormValidation;
use App\Models\PekanEsport;
use App\Notifications\PekanEsportRegisterSuccess;
// use Illuminate\Http\Request;
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
                return view('pekanesport/pekanesport_games/game_not_found');
        }
    }

    public function form(): View
    {
        return view('pekanesport/pekanesport_form/formpendaftaran');
    }

    public function formSubmit(PekanEsportFormValidation $request)
    {
        $pathSSProfile = [];
        foreach ($request->file('ss_game') as $key => $file) {
            $pathSSProfile[$key] = $file->storeAs(
                'public/ss_game',
                md5(uniqid(rand(), true)) . "." . $file->getClientOriginalExtension()
            );
        }

        $pathIdentityCard = [];
        foreach ($request->file('identity_card') as $key => $file) {
            $pathIdentityCard[$key] = $file->storeAs(
                'public/identity_card',
                md5(uniqid(rand(), true)) . "." . $file->getClientOriginalExtension()
            );
        }

        $pekanesport = PekanEsport::create([
            'game_id'           => $request->game_id,
            'team_name'         => $request->team_name,
            'whatsapp_number'   => $request->whatsapp_leader,
            'email'             => $request->email,
            'player_name'       => $request->name_player,
            'nickname_player'   => $request->nickname_player,
            'id_player'         => $request->id_player,
            'screenshot_profile_player'         => $pathSSProfile,
            'identity_player'         => $pathIdentityCard,
        ]);

        $pekanesport->notify(new PekanEsportRegisterSuccess);

        return redirect()->route('pekanesport.form')->with('status', true);
    }
}
