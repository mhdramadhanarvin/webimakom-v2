<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;
use Webbingbrasil\FilamentCopyActions\Tables\Actions\CopyAction;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Artikel';

    public static function getPluralLabel(): string
    {
        return __('Artikel');
    }

    public static function getModelLabel(): string
    {
        return __('Artikel');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, $state, $context) {
                        if ($context === 'create') $set('slug', Str::slug($state));
                    })
                    ->reactive()
                    ->maxLength(200),
                Select::make('article_category_id')
                    ->label('Kategori Artikel')
                    ->relationship(name: 'article_category', titleAttribute: 'name')
                    ->required(),
                Grid::make(1)
                    ->schema([
                        TextInput::make('slug')
                            ->readonly()
                            ->prefix(route('article') . '/')
                            ->maxLength(200),
                    ]),
                Grid::make(2)
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->label('Thumbnail')
                            ->image()
                            ->imageEditor()
                            ->imageResizeMode('cover')
                            // ->imageCropAspectRatio('1:1')
                            ->required(),

                    ]),
                Grid::make(1)
                    ->schema([
                        RichEditor::make('content')
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
                    ]),
                Toggle::make('status')->label('Publish')
                    ->onColor('success')
                    // ->offColor('danger')
                    ->inline()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('Judul'),
                TextColumn::make('article_category.name')
                    ->label('Kategori')
                    ->badge()
                    ->searchable(),
                ImageColumn::make('thumbnail'),
                ToggleColumn::make('status')->label('Publish')
            ])
            ->filters([
                //
            ])
            ->actions([
                CopyAction::make('Link')
                    ->copyable(fn ($record) => route('article.detail', ['slug' => $record->slug]))
                    ->icon('heroicon-o-link'),
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
            'index' => Pages\ManageArticles::route('/'),
        ];
    }
}
