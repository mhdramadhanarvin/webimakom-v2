<?php

namespace App\Http\Controllers;

use App\Models\FormPendaftaran;
use Illuminate\Http\Request;

class FormPendaftaranController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_tim'          => 'nullable|string',
            'nomor_wa'          => 'required|string',
            'email'             => 'required|string',

            'nama_player_1'     => 'required|string',
            'nickname_player_1' => 'required|string',
            'id_player_1'       => 'required|string',
            
            'nama_player_2'     => 'nullable|string',
            'nickname_player_2' => 'nullable|string',
            'id_player_2'       => 'nullable|string',

            'nama_player_3'     => 'nullable|string',
            'nickname_player_3' => 'nullable|string',
            'id_player_3'       => 'nullable|string',

            'nama_player_4'     => 'nullable|string',
            'nickname_player_4' => 'nullable|string',
            'id_player_4'       => 'nullable|string',

            'nama_player_5'     => 'nullable|string',
            'nickname_player_5' => 'nullable|string',
            'id_player_5'       => 'nullable|string',

            'nama_player_6'     => 'nullable|string',
            'nickname_player_6' => 'nullable|string',
            'id_player_6'       => 'nullable|string',

            'pdf_file'          => 'nullable|mimes:pdf|max:2048',       
        ]);

        $formData = $request->except('pdf_file');
        $formData['pdf_file'] = $request->file('pdf_file');
        FormPendaftaran::create($formData);

        FormPendaftaran::create($data);
        return redirect()->route('home')->with('success', 'Form submitted successfully!');
    }
}
