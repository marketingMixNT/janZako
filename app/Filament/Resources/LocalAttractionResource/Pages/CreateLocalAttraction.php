<?php

namespace App\Filament\Resources\LocalAttractionResource\Pages;

use App\Filament\Resources\LocalAttractionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLocalAttraction extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = LocalAttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}