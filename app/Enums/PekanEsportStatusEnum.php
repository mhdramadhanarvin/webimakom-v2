<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum PekanEsportStatusEnum: string implements HasColor, HasLabel
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
}
