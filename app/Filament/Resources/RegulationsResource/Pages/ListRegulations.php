<?php

namespace App\Filament\Resources\RegulationsResource\Pages;

use App\Filament\Resources\RegulationsResource;
use App\Models\Regulations;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegulations extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = RegulationsResource::class;

    protected function getHeaderActions(): array
    {
        // Sprawdzanie, czy istnieje jakikolwiek rekord w tabeli Regulations
        $regulationsExist = Regulations::exists();

        return array_filter([
            // Tylko jeśli nie istnieje żaden rekord, wyświetlamy przycisk Create
            !$regulationsExist ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
