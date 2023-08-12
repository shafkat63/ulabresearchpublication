<?php

namespace App\Filament\Resources\BookChapterResource\Pages;

use App\Filament\Resources\BookChapterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookChapters extends ListRecords
{
    protected static string $resource = BookChapterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
