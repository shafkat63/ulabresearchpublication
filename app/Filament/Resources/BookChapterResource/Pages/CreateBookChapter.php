<?php

namespace App\Filament\Resources\BookChapterResource\Pages;

use App\Filament\Resources\BookChapterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBookChapter extends CreateRecord
{
    protected static string $resource = BookChapterResource::class;
}
