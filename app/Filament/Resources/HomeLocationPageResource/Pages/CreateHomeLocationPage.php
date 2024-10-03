<?php

namespace App\Filament\Resources\HomeLocationPageResource\Pages;

use App\Filament\Resources\HomeLocationPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeLocationPage extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = HomeLocationPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
