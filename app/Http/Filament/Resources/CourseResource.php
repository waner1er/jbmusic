<?php

namespace App\Http\Filament\Resources;

use App\Models\Course;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use FilamentTiptapEditor\TiptapEditor;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationGroup = 'catégories ';

    protected static ?string $navigationIcon = 'heroicon-o-play';

    protected static ?string $label = 'Cours';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Heading')
                    ->schema([
                        Forms\Components\Fieldset::make('Details')
                            ->schema([
                                TitleWithSlugInput::make(urlPath: '/cours/',
                                    urlVisitLinkLabel: 'Visit Book',
                                    titleLabel: 'Title',
                                    titlePlaceholder: 'Ins')->columnSpanFull(),
                                Forms\Components\Textarea::make('excerpt')->autofocus()->required()->columnSpanFull(),
                                TiptapEditor::make('content')->profile('simple')->autofocus()->required()->columnSpanFull(),
                            ])
                            ->columnSpan(2),
                        Forms\Components\Fieldset::make('Details')
                            ->schema([
                                Forms\Components\TextInput::make('hour_price')->autofocus()->required(),
                                Forms\Components\TextInput::make('km_shift')->autofocus()->required(),
                                Forms\Components\Select::make('level_id')
                                    ->relationship('level', 'name'),
                                CuratorPicker::make('image')
                                    ->helperText('dimension 1920x1080'),
                            ])
                            ->columns(1)
                            ->columnSpan(1),

                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
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
            'index' => \App\Http\Filament\Resources\CourseResource\Pages\ListCourses::route('/'),
            'create' => \App\Http\Filament\Resources\CourseResource\Pages\CreateCourse::route('/create'),
            'edit' => \App\Http\Filament\Resources\CourseResource\Pages\EditCourse::route('/{record}/edit'),
        ];
    }
}
