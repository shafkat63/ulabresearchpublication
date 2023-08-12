<?php

namespace App\Filament\Resources\JournalclearResource\Pages;

use App\Filament\Resources\JournalclearResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJournalclear extends EditRecord
{
    protected static string $resource = JournalclearResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
