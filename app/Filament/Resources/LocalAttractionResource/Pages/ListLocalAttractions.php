<?php

namespace App\Filament\Resources\LocalAttractionResource\Pages;

use App\Filament\Resources\LocalAttractionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLocalAttractions extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = LocalAttractionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}