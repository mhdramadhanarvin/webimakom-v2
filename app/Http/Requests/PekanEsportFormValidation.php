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
            'ss_game.*' => ['required', 'file'],
            'identity_card.*' => ['required', 'file'],
        ];
    }
}
