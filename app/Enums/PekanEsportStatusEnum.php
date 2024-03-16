<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum PekanEsportStatusEnum: string implements HasColor, HasLabel, HasIcon
{
    case WAITING_CONFIRMATION = 'waiting_confirmation';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::WAITING_CONFIRMATION => 'warning',
            self::APPROVED => 'success',
            self::REJECTED => 'danger',
        };
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::WAITING_CONFIRMATION => 'Menunggu Konfirmasi',
            self::APPROVED => 'Disetujui',
            self::REJECTED => 'Ditolak',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::WAITING_CONFIRMATION => 'heroicon-m-arrow-path',
            self::APPROVED => 'heroicon-m-check',
            self::REJECTED => 'heroicon-m-x-mark',
        };
    }
}
