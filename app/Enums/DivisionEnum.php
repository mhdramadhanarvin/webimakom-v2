<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;

enum DivisionEnum: string implements HasColor
{
    case Kominfo = "Kominfo";
    case Kewirausahaan = "Kewirausahaan";
    case E_Sport = "E-Sport";
    case Humas = "Humas";
    case Pendidikan = "Pendidikan";
    case Prestasi = "Prestasi";

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Kominfo => 'success',
            self::Kewirausahaan => 'warning',
            self::E_Sport => 'danger',
            self::Humas => 'gray',
            self::Pendidikan => 'info',
            self::Prestasi => 'primary',
        };
    }
}
