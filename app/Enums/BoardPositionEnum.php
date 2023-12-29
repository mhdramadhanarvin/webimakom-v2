<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum BoardPositionEnum: string implements HasColor, HasLabel
{
    case Ketua = "1";
    case WakilKetua = "2";
    case Sekretaris = "3";
    case WakilSekretaris = "4";
    case Bendahara = "5";
    case WakilBendahara = "6";

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Ketua => 'Ketua Umum',
            self::WakilKetua => 'Wakil Ketua Umum',
            self::Sekretaris => 'Sekretaris Umum',
            self::WakilSekretaris => 'Wakil Sekretaris Umum',
            self::Bendahara => 'Bendahara Umum',
            self::WakilBendahara => 'Wakil Bendahara Umum',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Ketua => 'success',
            self::WakilKetua => 'primary',
            self::Sekretaris => 'warning',
            self::WakilSekretaris => 'danger',
            self::Bendahara => 'info',
            self::WakilBendahara => 'gray',
        };
    }
}
