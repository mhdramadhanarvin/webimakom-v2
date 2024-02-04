<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum PekanEsportGameEnum: string implements HasLabel, HasColor
{
    case VALORANT = '1';
    case PUBGM = '2';
    case ML = '3';
    case FF = '4';
    case PS = '5';
    case MAGICCHESS = '6';
    case DYNASTONES = '7';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::VALORANT => 'VALORANT',
            self::PUBGM => 'PUBGM',
            self::ML => 'MOBILE LEGEND',
            self::FF => 'FREE FIRE',
            self::PS => 'PS FOOTBALL',
            self::MAGICCHESS => 'MAGIC CHESS',
            self::DYNASTONES => 'DYNASTONES',
        };
    }

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
