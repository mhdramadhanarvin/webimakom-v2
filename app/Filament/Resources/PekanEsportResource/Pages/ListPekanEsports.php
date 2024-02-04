<?php

namespace App\Filament\Resources\PekanEsportResource\Pages;

use App\Filament\Resources\PekanEsportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPekanEsports extends ListRecords
{
    protected static string $resource = PekanEsportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
