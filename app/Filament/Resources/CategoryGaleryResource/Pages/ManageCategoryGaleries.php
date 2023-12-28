<?php

namespace App\Filament\Resources\CategoryGaleryResource\Pages;

use App\Filament\Resources\CategoryGaleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCategoryGaleries extends ManageRecords
{
    protected static string $resource = CategoryGaleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
