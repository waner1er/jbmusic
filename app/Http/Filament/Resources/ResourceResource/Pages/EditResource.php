<?php

namespace App\Http\Filament\Resources\ResourceResource\Pages;

use App\Http\Filament\Resources\ResourceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditResource extends EditRecord
{
    protected static string $resource = ResourceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
