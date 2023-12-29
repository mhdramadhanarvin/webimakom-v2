<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Board;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BoardResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BoardResource\RelationManagers;

class BoardResource extends Resource
{
    protected static ?string $model = Board::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Organisasi';
    protected static ?string $navigationLabel = 'Pengurus';
    protected static ?string $label = "Pengurus.";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label('Nama')->required(),
                Select::make('position')
                    ->label('Jabatan')
                    ->options([
                        '1' => 'Ketua Umum',
                        '2' => 'Wakil Ketua Umum',
                        '3' => 'Sekretaris Umum',
                        '4' => 'Wakil Sekretaris Umum',
                        '5' => 'Bendahara Umum',
                        '6' => 'Wakil Bendahara Umum',
                    ])
                    ->required(),
                TextInput::make('facebook')
                    ->label('Facebook')
                    ->url()
                    ->placeholder('https://facebook.com/imakom.unpab'),
                TextInput::make('instagram')
                    ->label('Instagram')
                    ->url()
                    ->placeholder('https://instagram.com/imakom_unpab'),
                TextInput::make('linkedin')
                    ->label('Linkedin')
                    ->url()
                    ->placeholder('https://linkedin.com/in/muhammad-ramadhan-arvin'),
                Grid::make(2)->schema([
                    FileUpload::make('photo')
                        ->label('Foto')
                        ->image()
                        ->imageEditor()
                        ->imageResizeMode('cover')
                        ->imageCropAspectRatio('1:1')
                ]),
                Grid::make(2)->schema([
                    Toggle::make('status')
                        ->label('Status')
                        ->default(true)
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama')->searchable(),
                TextColumn::make('position')
                    ->sortable()
                    ->label('Jabatan')
                    ->badge(),
                ViewColumn::make('sosmed')->view('tables.columns.board-socmed'),
                ImageColumn::make('photo')
                    ->defaultImageUrl(url('./images/default.jpg')),
                ToggleColumn::make('status'),
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
            'index' => Pages\ManageBoards::route('/'),
        ];
    }
}
