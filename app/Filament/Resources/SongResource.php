<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Song;
use App\Models\User;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SongResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SongResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
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
                FileUpload::make('file')
                ->directory('songs')
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
