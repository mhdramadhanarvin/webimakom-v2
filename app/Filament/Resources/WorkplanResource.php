<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkplanResource\Pages;
use App\Filament\Resources\WorkplanResource\RelationManagers;
use App\Models\Workplan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;

class WorkplanResource extends Resource
{
    protected static ?string $model = Workplan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Organisasi';

    public static function getPluralLabel(): string
    {
        return __('Program Kerja');
    }

    public static function getModelLabel(): string
    {
        return __('Program Kerja');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->label('Judul'),
                Grid::make(2)
                    ->schema([
                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(10)
                            ->cols(20)
                    ]),
                DatePicker::make('start_date')->label('Tanggal Mulai'),
                DatePicker::make('end_date')->label('Tanggal Selesai'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title')->label('Judul'),
                TextColumn::make('start_date')
                    ->label('Tanggal Mulai')
                    ->dateTime('d M Y'),
                TextColumn::make('end_date')
                    ->label('Tanggal Selesai')
                    ->dateTime('d M Y'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageWorkplans::route('/'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->orderBy('start_date', 'desc');
    }
}
