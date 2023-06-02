<?php

namespace App\Http\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\Role;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                'name' => Forms\Components\TextInput::make('name')
                    ->label(__('jbmusic.complete_name'))
                    ->required()
                    ->disableAutocomplete()
                    ->placeholder(__('jbmusic.complete_name')),
                'email' => Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->disableAutocomplete()
                    ->placeholder(__('Email')),
                'role' => Forms\Components\Select::make('role')
                    ->options(Role::all()->pluck('name', 'id')->toArray())
                    ->multiple()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => \App\Http\Filament\Resources\UserResource\Pages\ListUsers::route('/'),
            'create' => \App\Http\Filament\Resources\UserResource\Pages\CreateUser::route('/create'),
            'edit' => \App\Http\Filament\Resources\UserResource\Pages\EditUser::route('/{record}/edit'),
        ];
    }    
}
