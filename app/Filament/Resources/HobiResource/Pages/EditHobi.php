<?php

namespace App\Filament\Resources\HobiResource\Pages;

use App\Filament\Resources\HobiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHobi extends EditRecord
{
    protected static string $resource = HobiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
