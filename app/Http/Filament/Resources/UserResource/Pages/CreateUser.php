<?php

namespace App\Http\Filament\Resources\UserResource\Pages;

use App\Http\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
