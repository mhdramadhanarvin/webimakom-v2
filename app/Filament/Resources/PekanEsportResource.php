<?php

namespace App\Filament\Resources;

use App\Enums\PekanEsportStatusEnum;
use App\Filament\Resources\PekanEsportResource\Pages;
use App\Http\Controllers\PekanEsportController;
use App\Infolists\Components\PekanEsportImageEntry;
use App\Models\PekanEsport;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section as ComponentsSection;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Infolists\Components\Actions;
use Filament\Infolists\Components\Actions\Action as ActionInfolist;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Infolists\Components\KeyValueEntry;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\SelectFilter;

class PekanEsportResource extends Resource
{
    protected static ?string $model = PekanEsport::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pekan Esport';

    public static function getPluralLabel(): string
    {
        return __('Pendaftar');
    }

    public static function getModelLabel(): string
    {
        return __('Pendaftar');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                ToggleButtons::make('status')
                    ->options(PekanEsportStatusEnum::class)
                    ->inline()
                    ->disabled(),
                TextInput::make('team_name')
                    ->label('Nama Tim')
                    ->placeholder('Masukkan Nama Tim')
                    ->required(),

                TextInput::make('email')
                    ->label('Email')
                    ->placeholder('Masukkan Email')
                    ->required(),

                TextInput::make('whatsapp_number')
                    ->label('Nomor WhatsApp Tim')
                    ->placeholder('Masukkan Nomor WhatsApp')
                    ->required(),

                ComponentsSection::make('')
                    ->columns(3)
                    ->schema([
                        Repeater::make('player_name')
                            ->simple(
                                TextInput::make('player_name')
                                    ->required(),
                            )
                            ->addable(false)
                            ->deletable(false),
                        Repeater::make('nickname_player')
                            ->simple(
                                TextInput::make('nickname_player')
                                    ->required(),
                            )
                            ->addable(false)
                            ->deletable(false),
                        Repeater::make('id_player')
                            ->simple(
                                TextInput::make('id_player')
                                    ->required(),
                            )
                            ->addable(false)
                            ->deletable(false),
                    ]),
                FileUpload::make('proof_of_payment')
                    ->label('Bukti Pembayaran')
                    ->directory('proof_of_payment')
            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('team_name')
                    ->label('Nama Tim')
                    ->limit(15)
                    ->sortable()
                    ->searchable(),
                TextColumn::make('whatsapp_number')
                    ->label('Nomor Whatsapp')
                    ->searchable(),
                TextColumn::make('game.game_name')
                    ->sortable()
                    ->searchable()
                    ->label('Cabor Game')
                    ->badge(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->label('Daftar Pada')
                    ->sortable()
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options(PekanEsportStatusEnum::class),
                SelectFilter::make('game_id')
                    ->label('Game')
                    ->relationship('game', 'game_name'),
            ])
            ->actions([
                Action::make('approve')
                    ->icon('heroicon-c-check')
                    ->color('success')
                    ->visible(fn ($record) => $record->status == PekanEsportStatusEnum::WAITING_CONFIRMATION)
                    ->requiresConfirmation()
                    ->action(fn (PekanEsport $record) => (new PekanEsportController)->approve($record)),
                Action::make('reject')
                    ->icon('heroicon-c-x-mark')
                    ->color('danger')
                    ->form([
                        TextInput::make('reason')
                            ->label('Alasan Penolakan')
                            ->required(),
                    ])
                    ->requiresConfirmation()
                    ->visible(fn ($record) => $record->status == PekanEsportStatusEnum::WAITING_CONFIRMATION)
                    ->action(fn (array $data, PekanEsport $record) => (new PekanEsportController)->reject($record, $data)),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
                    ->visible(fn ($record) => $record->status == PekanEsportStatusEnum::WAITING_CONFIRMATION),
            ])
            ->bulkActions([])->groups([
                Tables\Grouping\Group::make('created_at')
                    ->label('Tanggal Daftar')
                    ->date()
                    ->collapsible(),
                Tables\Grouping\Group::make('status')
                    ->label('Status')
                    ->collapsible(),
                Tables\Grouping\Group::make('game.game_name')
                    ->label('Game')
                    ->collapsible(),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make("Detail Pendaftar")
                    ->schema([
                        Section::make()->columns(['sm' => 5])->schema([
                            TextEntry::make('status')
                                ->label('Status')
                                ->badge(),
                            TextEntry::make('reason')
                                ->label('Alasan Penolakan')
                                ->default('-'),
                        ]),
                        Section::make()->columns(['sm' => 5])->schema([
                            TextEntry::make('team_name')
                                ->label('Nama Tim'),
                            TextEntry::make('game.game_name')
                                ->label('Cabang Olahraga Game'),
                            TextEntry::make('created_at')
                                ->label('Daftar Pada')
                                ->dateTime('d M Y H:i'),
                            TextEntry::make('email'),
                            TextEntry::make('whatsapp_number')
                                ->label('Nomor Whatsapp'),
                        ]),
                        Section::make()->columns(['sm' => 3])->schema([
                            KeyValueEntry::make('player_name')
                                ->label('Name Pemain')
                                ->keyLabel('Property name')
                                ->valueLabel('Property value'),
                            KeyValueEntry::make('nickname_player')
                                ->label('Nickname Pemain')
                                ->keyLabel('Property name')
                                ->valueLabel('Property value'),
                            KeyValueEntry::make('id_player')
                                ->label('ID Pemain')
                                ->keyLabel('Property name')
                                ->valueLabel('Property value'),
                        ]),
                        Section::make()->columns(['sm' => 3])->schema([
                            PekanEsportImageEntry::make('screenshot_profile_player')
                                ->label('Screenshot Profile Pemain'),
                            PekanEsportImageEntry::make('identity_player')
                                ->label('Identitas Pemain'),
                            PekanEsportImageEntry::make('proof_of_payment')
                                ->label('Bukti Pembayaran'),
                        ]),
                        Actions::make([
                            ActionInfolist::make('approve')
                                ->icon('heroicon-c-check')
                                ->color('success')
                                ->visible(fn ($record) => $record->status == PekanEsportStatusEnum::WAITING_CONFIRMATION)
                                ->requiresConfirmation()
                                ->action(fn (PekanEsport $record) => (new PekanEsportController)->approve($record)),
                            ActionInfolist::make('reject')
                                ->icon('heroicon-c-x-mark')
                                ->color('danger')
                                ->form([
                                    TextInput::make('reason')
                                        ->label('Alasan Penolakan')
                                        ->required(),
                                ])
                                ->requiresConfirmation()
                                ->visible(fn ($record) => $record->status == PekanEsportStatusEnum::WAITING_CONFIRMATION)
                                ->action(fn (array $data, PekanEsport $record) => (new PekanEsportController)->reject($record, $data)),
                        ])->fullWidth(),
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
            'edit' => Pages\EditPekanEsport::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', PekanEsportStatusEnum::WAITING_CONFIRMATION)->count();
    }
}
