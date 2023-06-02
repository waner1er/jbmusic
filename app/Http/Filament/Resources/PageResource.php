<?php

namespace App\Http\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use FilamentTiptapEditor\TiptapEditor;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Heading')
                    ->description('Description')
                    ->schema([
                        TitleWithSlugInput::make(),
                        Forms\Components\Textarea::make('intro')
                            ->required(),
                        Forms\Components\TextInput::make('subtitle')
                            ->required(),
                        TiptapEditor::make('content')
                            ->output('html')
                            ->required(),
                        CuratorPicker::make('image')
                            ->preserveFilenames()
                            ->required(),
                        Forms\Components\Toggle::make('is_published')
                            ->default(false),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('intro'),
                Tables\Columns\TextColumn::make('content'),
                Tables\Columns\TextColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
            'index' => \App\Http\Filament\Resources\PageResource\Pages\ListPages::route('/'),
            'create' => \App\Http\Filament\Resources\PageResource\Pages\CreatePage::route('/create'),
            'edit' => \App\Http\Filament\Resources\PageResource\Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
