<?php

namespace App\Exports;

use App\Models\PekanEsport;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Support\Str;

class PekanEsportExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    protected $filters;

    public function __construct($filters)
    {
        $this->filters = $filters;
    }

    public function query()
    {
        $query = PekanEsport::query()->select('team_name', 'player_name', 'game_id', 'proof_of_payment')
            ->with('game:id,game_name'); // Memuat hanya kolom id dan game_name dari tabel game

        if (!empty($this->filters['cabor'])) {
            $query->where('game_id', $this->filters['cabor']);
        }

        if (!empty($this->filters['status'])) {
            $query->where('status', $this->filters['status']);
        }

        return $query;
    }

    public function headings(): array
    {
        return [
            'Nama Tim',
            'Nama Pemain',
            'Cabang Olahraga',
            'Bukti Pembayaran',
        ];
    }

    public function map($row): array
    {
        return [
            $row->team_name,
            $row->player_name,
            $row->game->game_name, // Mengakses nama game melalui relasi
            Str::remove('public/', asset('storage/' . $row->proof_of_payment)),
        ];
    }
}
