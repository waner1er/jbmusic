<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Page;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\PageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use App\Filament\Resources\PageResource\RelationManagers;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Heading')
                    ->schema([
                        TitleWithSlugInput::make(
                            fieldTitle: 'title', // The name of the field in your model that stores the title.
                            fieldSlug: 'slug', // The name of the field in your model that will store the slug.
                        ),
                        TextInput::make('menu_title')
                            ->autofocus()
                            ->required()
                            ->placeholder('Enter menu title')
                            ->label('Menu Title'),
                        CuratorPicker::make('image')
                            ->label('Image'),
                        TiptapEditor::make('content')
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->words(2),
                Tables\Columns\TextColumn::make('menu_title')
                    ->searchable()
                    ->sortable()
                    ->words(2),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
