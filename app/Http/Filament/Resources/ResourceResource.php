<?php

namespace App\Http\Filament\Resources;

use App\Models\Resource as ResourceModel;
use App\Models\User;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ResourceResource extends Resource
{
    protected static ?string $model = ResourceModel::class;

    protected static ?string $navigationGroup = 'Espace utilisateurs';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required(),
                // Forms\Components\FileUpload::make('file')
                //     ->directory('resources')
                //     ->required(),
                CuratorPicker::make('file')
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
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\ImageColumn::make('file'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => \App\Http\Filament\Resources\ResourceResource\Pages\ListResources::route('/'),
            'create' => \App\Http\Filament\Resources\ResourceResource\Pages\CreateResource::route('/create'),
            'edit' => \App\Http\Filament\Resources\ResourceResource\Pages\EditResource::route('/{record}/edit'),
        ];
    }
}
