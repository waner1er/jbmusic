<?php

namespace App\Http\Filament\Resources;

use App\Models\Presta;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use FilamentTiptapEditor\TiptapEditor;

class PrestaResource extends Resource
{
    protected static ?string $model = Presta::class;

    protected static ?string $navigationGroup = 'catégories ';

    protected static ?string $navigationIcon = 'heroicon-o-key';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Heading')
                    ->description('Description')
                    ->schema([
                        TitleWithSlugInput::make(urlPath: '/prestations/'),
                        Textarea::make('excerpt')
                            ->required(),
                        TiptapEditor::make('content')
                            ->output('html')
                            ->required(),
                        CuratorPicker::make('image')
                            ->preserveFilenames()
                            ->required(),

                    ]),
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
            'index' => \App\Http\Filament\Resources\PrestaResource\Pages\ListPrestas::route('/'),
            'create' => \App\Http\Filament\Resources\PrestaResource\Pages\CreatePresta::route('/create'),
            'edit' => \App\Http\Filament\Resources\PrestaResource\Pages\EditPresta::route('/{record}/edit'),
        ];
    }
}
