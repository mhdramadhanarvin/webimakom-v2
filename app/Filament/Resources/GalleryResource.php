<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Gallery;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\GalleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GalleryResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Galeri';
    protected static ?string $navigationLabel = 'Galeri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_gallery_id')
                    ->label('Kategori Galeri')
                    ->relationship(name: 'category_gallery', titleAttribute: 'name')
                    ->required(),
                Grid::make(2)
                    ->schema([
                        FileUpload::make('photo')
                            ->label('Foto')
                            ->image()
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            ->required(),
                        Textarea::make('caption')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('photo')
                    ->defaultImageUrl(url('./images/default.jpg')),
                TextColumn::make('caption')
                    ->searchable(),
                TextColumn::make('category_gallery.name')
                    ->label('Kategori')
                    ->badge()
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->since()
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
            'index' => Pages\ManageGalleries::route('/'),
        ];
    }
}
