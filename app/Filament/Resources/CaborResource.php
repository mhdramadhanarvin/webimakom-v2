<?php

namespace App\Filament\Resources;

use App\Enums\PekanEsportStatusEnum;
use App\Filament\Resources\CaborResource\Pages;
use App\Models\Cabor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CaborResource extends Resource
{
    protected static ?string $model = Cabor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pekan Esport';

    public static function getPluralLabel(): string
    {
        return __('Cabor');
    }

    public static function getModelLabel(): string
    {
        return __('Cabor');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('game_name')
                    ->label('Nama Game')
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, $state, $context) {
                        if ($context === 'create') $set('slug', Str::slug($state));
                    })
                    ->required(),
                TextInput::make('slug')
                    ->readonly()
                    ->prefix(route('pekanesport') . '/')
                    ->maxLength(200)
                    ->required(),
                FileUpload::make('thumbnail')
                    ->label('Thumbnail')
                    ->image()
                    ->optimize('webp')
                    ->resize(50)
                    ->imageEditor()
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('1:1')
                    ->required(),
                TextInput::make('max_registered')
                    ->label('Max Slot Tim Mendaftar')
                    ->required(),
                Grid::make(1)
                    ->schema([
                        RichEditor::make('description')
                            ->label('Deskripsi')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->fileAttachmentsDirectory('attachments')
                            ->fileAttachmentsVisibility('public')
                            ->required()
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('game_name')->label('Nama Game'),
                TextColumn::make('registered_count')
                    ->label('Jumlah Pendaftar Dikonfirmasi')
                    ->getStateUsing(fn ($record) => $record->registered()->where('status', PekanEsportStatusEnum::APPROVED)->count()),
                TextColumn::make('max_registered')
                    ->label('Max Slot Tim Mendaftar'),
                ImageColumn::make('thumbnail')
                    ->defaultImageUrl(url('./images/default.webp')),
                TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->label('Dibuat Pada')
                    ->sortable()
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
            'index' => Pages\ListCabors::route('/'),
            'create' => Pages\CreateCabor::route('/create'),
            'edit' => Pages\EditCabor::route('/{record}/edit'),
        ];
    }
}
