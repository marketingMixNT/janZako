<?php

namespace App\Filament\Resources\LocalAttractionResource\Pages;

use App\Filament\Resources\LocalAttractionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLocalAttraction extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = LocalAttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}