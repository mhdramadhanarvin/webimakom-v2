<?php

namespace App\Filament\Resources\ContentResource\Pages;

use App\Filament\Resources\ContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageContents extends ManageRecords
{
    protected static string $resource = ContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
