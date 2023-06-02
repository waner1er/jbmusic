<?php

namespace App\Http\Filament\Resources\SongResource\Pages;

use App\Http\Filament\Resources\SongResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSong extends CreateRecord
{
    protected static string $resource = SongResource::class;
}
