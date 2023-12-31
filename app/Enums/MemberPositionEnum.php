<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum MemberPositionEnum: string implements HasLabel, HasColor
{
    case Leader = "1";
    case Member = "2";

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Leader => 'Ketua Divisi',
            self::Member => 'Anggota Divisi',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Leader => 'success',
            self::Member => 'warning',
        };
    }
}
