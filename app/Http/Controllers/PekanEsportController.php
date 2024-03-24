<?php

namespace App\Http\Controllers;

use App\Enums\PekanEsportStatusEnum;
use App\Http\Requests\PekanEsportFormValidation;
use App\Models\Cabor;
use App\Models\Content;
use App\Models\PekanEsport;
use App\Notifications\PekanEsportRegisterNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class PekanEsportController extends Controller
{
    public function index(): View
    {
        $cabor = Cabor::all();
        $content = Content::first();
        return view('pekanesport', compact('cabor', 'content'));
    }

    public function game($game): View
    {
        $detail_cabor = Cabor::where('slug', $game)->first();

        if (!$detail_cabor) abort(404);

        return view('detail-cabor-pekanesport', compact('detail_cabor'));
    }

    public function form(): View
    {
        $optionCabor = Cabor::withCount(['registered' => function ($query) {
            $query->where('status', PekanEsportStatusEnum::APPROVED);
        }])->get();
        return view('form-pekanesport', compact('optionCabor'));
    }

    public function formSubmit(PekanEsportFormValidation $request)
    {
        DB::beginTransaction();
        try {

            $cabor =  Cabor::withCount(['registered' => function ($query) {
                $query->where('status', PekanEsportStatusEnum::APPROVED);
            }])->find($request->game_id);

            if ($cabor->registered_count >= $cabor->max_registered) {
                throw new \Exception("Slot tim untuk cabor " . $cabor->game_name . " sudah penuh, silahkan mendaftar pada cabor lain.");
            }

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
            $proof_of_payment = $request->file('proof_of_payment');
            $pathProofOfPayment = $proof_of_payment->storeAs(
                'public/proof_of_payment',
                md5(uniqid(rand(), true)) . "." . $proof_of_payment->getClientOriginalExtension()
            );

            $pekanesport = PekanEsport::create([
                'game_id'           => $request->game_id,
                'team_name'         => $request->team_name,
                'whatsapp_number'   => $request->whatsapp_leader,
                'email'             => $request->email,
                'player_name'       => $request->name_player,
                'nickname_player'   => $request->nickname_player,
                'id_player'         => $request->id_player,
                'screenshot_profile_player' => $pathSSProfile,
                'identity_player' => $pathIdentityCard,
                'proof_of_payment' => $pathProofOfPayment,
                'status' => PekanEsportStatusEnum::WAITING_CONFIRMATION
            ]);

            $pekanesport->notify(new PekanEsportRegisterNotification);

            DB::commit();
            return redirect()->route('pekanesport.form')->with([
                'status' => true,
                'message' => "Terima kasih telah melakukan perdaftaran, selanjutnya menunggu verifikasi oleh tim PEKAN E-SPORT V-2 UNPAB dan akan diinformasikan melalui email yang didaftarkan."
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return redirect()->route('pekanesport.form')->with([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    public function approve(PekanEsport $pekanEsport)
    {
        DB::beginTransaction();
        try {
            $pekanEsport->update(['status' => 'approved']);
            $pekanEsport->notify(new PekanEsportRegisterNotification);
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function reject(PekanEsport $pekanEsport, $data)
    {
        DB::beginTransaction();
        try {
            $pekanEsport->update(['status' => 'rejected', 'reason' => $data['reason']]);
            $pekanEsport->notify(new PekanEsportRegisterNotification);
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollBack();
            return $e->getMessage();
        }
        $pekanEsport->update(['status' => 'rejected', 'reason' => $data['reason']]);
    }
}
