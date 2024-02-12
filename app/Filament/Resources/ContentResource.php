<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentResource\Pages;
use App\Filament\Resources\ContentResource\RelationManagers;
use App\Models\Content;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContentResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pekan Esport';

    public static function getPluralLabel(): string
    {
        return __('Konten');
    }

    public static function getModelLabel(): string
    {
        return __('Konten');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->maxLength(200)
                    ->required(),
                Grid::make(1)
                    ->schema([
                        RichEditor::make('content')
                            ->label('Konten')
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
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Nama'),
                TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->label('Dibuat Pada')
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->dateTime('d M Y H:i')
                    ->label('Terakhir Diubah Pada')
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
            'index' => Pages\ManageContents::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return static::getModel()::count() > 0 ? false : true;
    }
}
