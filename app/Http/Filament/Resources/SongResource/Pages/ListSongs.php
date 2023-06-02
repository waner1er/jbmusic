<?php

namespace App\Http\Filament\Resources\SongResource\Pages;

use App\Http\Filament\Resources\SongResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSongs extends ListRecords
{
    protected static string $resource = SongResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
