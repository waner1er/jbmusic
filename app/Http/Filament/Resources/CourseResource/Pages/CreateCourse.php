<?php

namespace App\Http\Filament\Resources\CourseResource\Pages;

use App\Http\Filament\Resources\CourseResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCourse extends CreateRecord
{
    protected static string $resource = CourseResource::class;
}
