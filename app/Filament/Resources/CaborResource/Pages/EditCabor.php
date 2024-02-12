<?php

namespace App\Filament\Resources\CaborResource\Pages;

use App\Filament\Resources\CaborResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCabor extends EditRecord
{
    protected static string $resource = CaborResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
