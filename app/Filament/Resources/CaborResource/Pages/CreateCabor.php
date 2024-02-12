<?php

namespace App\Filament\Resources\CaborResource\Pages;

use App\Filament\Resources\CaborResource;
// use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCabor extends CreateRecord
{
    protected static string $resource = CaborResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
