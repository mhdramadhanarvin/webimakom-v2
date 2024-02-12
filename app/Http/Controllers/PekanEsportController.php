<?php

namespace App\Http\Controllers;

use App\Http\Requests\PekanEsportFormValidation;
use App\Models\Cabor;
use App\Models\PekanEsport;
use App\Notifications\PekanEsportRegisterSuccess;
// use Illuminate\Http\Request;
use Illuminate\View\View;

class PekanEsportController extends Controller
{
    public function index(): View
    {
        $cabor = Cabor::all();
        return view('pekanesport', compact('cabor'));
    }

    public function game($game): View
    {
        $detail_cabor = Cabor::where('slug', $game)->first();

        if (!$detail_cabor) abort(404);

        return view('detail-cabor-pekanesport', compact('detail_cabor'));
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
