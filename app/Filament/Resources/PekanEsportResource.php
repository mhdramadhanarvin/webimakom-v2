<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PekanEsportResource\Pages;
use App\Filament\Resources\PekanEsportResource\RelationManagers;
use App\Models\PekanEsport;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PekanEsportResource extends Resource
{
    protected static ?string $model = PekanEsport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Event';

    public static function getPluralLabel(): string
    {
        return __('Pekan Esport');
    }

    public static function getModelLabel(): string
    {
        return __('Pekan Esport');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPekanEsports::route('/'),
            // 'create' => Pages\CreatePekanEsport::route('/create'),
            'edit' => Pages\EditPekanEsport::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
