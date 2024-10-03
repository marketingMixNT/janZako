<?php

namespace App\Filament\Resources\HomeApartmentsPageResource\Pages;

use App\Filament\Resources\HomeApartmentsPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeApartmentsPage extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = HomeApartmentsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
