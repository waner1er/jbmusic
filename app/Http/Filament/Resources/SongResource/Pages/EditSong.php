<?php

namespace App\Http\Filament\Resources\SongResource\Pages;

use App\Http\Filament\Resources\SongResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSong extends EditRecord
{
    protected static string $resource = SongResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
