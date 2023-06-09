<?php

namespace App\Http\Filament\Resources;

use App\Models\Song;
use App\Models\User;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class SongResource extends Resource
{
    protected static ?string $model = Song::class;

    protected static ?string $navigationGroup = 'Espace utilisateurs';

    protected static ?string $navigationIcon = 'heroicon-o-music-note';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->autofocus()->required(),
                TextInput::make('slug')->autofocus()->required(),
                FileUpload::make('file')
                    ->preserveFilenames()
                    ->directory('midi')
                    ->visibility('public')
                    ->required(),

                Select::make('users')
                    ->relationship('users', 'name')
                    ->multiple()
                    ->options(User::all()->pluck('name', 'id')->toArray())
                    ->placeholder('Select users'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('slug'),
                TextColumn::make('users.name')
                    ->label('Users'),
                TextColumn::make('file'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => \App\Http\Filament\Resources\SongResource\Pages\ListSongs::route('/'),
            'create' => \App\Http\Filament\Resources\SongResource\Pages\CreateSong::route('/create'),
            'edit' => \App\Http\Filament\Resources\SongResource\Pages\EditSong::route('/{record}/edit'),
        ];
    }
}
