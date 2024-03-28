<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PekanEsportFormValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'team_name' => ['required', 'max:255'],
            'whatsapp_leader' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'name_player.*' => ['required', 'string', 'max:255'],
            'nickname_player.*' => ['required', 'string', 'max:255'],
            'id_player.*' => ['required', 'string', 'max:255'],
            'ss_game.*' => ['required', 'image', 'max:2048'],
            'identity_card.*' => ['required', 'image', 'max:2048'],
            'proof_of_payment' => ['required', 'image', 'max:2048'],
        ];
    }

    public function attributes(): array
    {
        return [
            'ss_game.*' => 'Screenshot Profile Game',
            'identity_card.*' => 'Kartu Tanda Penduduk / Kartu Pelajar / Raport Sekolah',
            'proof_of_payment' => 'Bukti Pembayaran',
        ];
    }

    public function messages(): array
    {
        return [
            'ss_game.*.max' => 'Screenshot Profile Game maksimal ukuran 2MB',
            'identity_card.*.max' => 'Kartu Tanda Penduduk / Kartu Pelajar / Raport Sekolah maksimal ukuran 2MB',
            'proof_of_payment.max' => 'Bukti Pembayaran maksimal ukuran 2MB',
        ];
    }
}
