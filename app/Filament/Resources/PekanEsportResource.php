<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PekanEsportResource\Pages;
use App\Infolists\Components\PekanEsportImageEntry;
// use App\Filament\Resources\PekanEsportResource\RelationManagers;
use App\Models\PekanEsport;
// use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Infolists\Components\KeyValueEntry;
// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                TextColumn::make('team_name')->label('Nama Tim'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('whatsapp_number')->label('Nomor Whatsapp'),
                TextColumn::make('game_id')
                    ->sortable()
                    ->label('Cabor Game')
                    ->badge(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make("")
                    ->schema([
                        TextEntry::make('team_name')->label('Nama Tim'),
                        TextEntry::make('email'),
                        TextEntry::make('whatsapp_number')->label('Nomor Whatsapp'),
                        KeyValueEntry::make('player_name')->label('Name Pemain')->keyLabel('Property name')->valueLabel('Property value'),
                        KeyValueEntry::make('nickname_player')->label('Nickname Pemain')->keyLabel('Property name')->valueLabel('Property value'),
                        KeyValueEntry::make('id_player')->label('ID Pemain')->keyLabel('Property name')->valueLabel('Property value'),
                        PekanEsportImageEntry::make('screenshot_profile_player'),
                        PekanEsportImageEntry::make('identity_player'),
                    ])
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
            'view' => Pages\ViewPekanEsport::route('/{record}'),
            // 'create' => Pages\CreatePekanEsport::route('/create'),
            // 'edit' => Pages\EditPekanEsport::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
