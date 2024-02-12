<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;

enum PekanEsportGameEnum: string implements HasColor
{
    case VALORANT = '1';
    case PUBGM = '2';
    case ML = '3';
    case FF = '4';
    case PS = '5';
    case MAGICCHESS = '6';
    case DYNASTONES = '7';

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::VALORANT => 'success',
            self::PUBGM => 'warning',
            self::ML => 'danger',
            self::FF => 'gray',
            self::PS => 'info',
            self::MAGICCHESS => 'primary',
            self::DYNASTONES => 'secondary',
        };
    }
}
