<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrestaResource\Pages;
use App\Models\Presta;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PrestaResource extends Resource
{
    protected static ?string $model = Presta::class;

    protected static ?string $navigationGroup = 'catégories ';

    protected static ?string $navigationIcon = 'heroicon-o-key';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
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
            'index' => Pages\ListPrestas::route('/'),
            'create' => Pages\CreatePresta::route('/create'),
            'edit' => Pages\EditPresta::route('/{record}/edit'),
        ];
    }
}
