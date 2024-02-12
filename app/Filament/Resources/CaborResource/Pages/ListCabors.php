<?php

namespace App\Filament\Resources\CaborResource\Pages;

use App\Filament\Resources\CaborResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ListCabors extends ManageRecords
{
    protected static string $resource = CaborResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
