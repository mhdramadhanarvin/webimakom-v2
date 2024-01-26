<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPendaftaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tim',
        'nomor_wa',
        'email',

        'nama_player_1',
        'nickname_player_1',
        'id_player_1',

        'nama_player_2',
        'nickname_player_2',
        'id_player_2',

        'nama_player_3',
        'nickname_player_3',
        'id_player_3',

        'nama_player_4',
        'nickname_player_4',
        'id_player_4',

        'nama_player_5',
        'nickname_player_5',
        'id_player_5',

        'nama_player_6',
        'nickname_player_6',
        'id_player_6',

        'pdf_file',
    ];

    public function setPdfFileAttribute($file)
    {
        $this->attributes['pdf_file'] = $file->store('pdf_files', 'public');
    }

    protected $table = 'form_pendaftaran';
    public $timestamps = true;
}
