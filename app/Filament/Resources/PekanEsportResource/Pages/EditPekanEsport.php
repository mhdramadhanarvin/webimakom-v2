<?php

namespace App\Filament\Resources\PekanEsportResource\Pages;

use App\Filament\Resources\PekanEsportResource;
use App\Models\PekanEsport;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditPekanEsport extends EditRecord
{
    protected static string $resource = PekanEsportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            // ->after(function (PekanEsport $record) {
            //     // delete multiple
            //     foreach ($record->screenshot_profile_player as $value) Storage::delete('public/' . $value);
            //     foreach ($record->identity_player as $value) Storage::delete('public/' . $value);
            //     // delete single
            //     Storage::delete('public/' . $record->proof_of_payment);
            // }),
            Actions\RestoreAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
