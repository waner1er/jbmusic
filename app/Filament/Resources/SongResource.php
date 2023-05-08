<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SongResource\Pages;
use App\Models\Song;
use App\Models\User;
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

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->autofocus()->required(),
                TextInput::make('slug')->autofocus()->required(),
                Select::make('file')
                    ->options(function() {
                        $songs = scandir(public_path('midi'));
                        $tests = collect($songs);

                        return $tests->filter(function($song) {
                            return strpos($song, '.gp3') !== false;
                        })->toArray();
                        return $song;
                    })
                    ->placeholder('Select a file'),

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
            'index' => Pages\ListSongs::route('/'),
            'create' => Pages\CreateSong::route('/create'),
            'edit' => Pages\EditSong::route('/{record}/edit'),
        ];
    }
}