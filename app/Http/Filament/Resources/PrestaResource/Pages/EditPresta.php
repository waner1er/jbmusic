<?php

namespace App\Http\Filament\Resources\PrestaResource\Pages;

use App\Http\Filament\Resources\PrestaResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPresta extends EditRecord
{
    protected static string $resource = PrestaResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
