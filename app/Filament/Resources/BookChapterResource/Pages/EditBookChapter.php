<?php

namespace App\Filament\Resources\BookChapterResource\Pages;

use App\Filament\Resources\BookChapterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookChapter extends EditRecord
{
    protected static string $resource = BookChapterResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
