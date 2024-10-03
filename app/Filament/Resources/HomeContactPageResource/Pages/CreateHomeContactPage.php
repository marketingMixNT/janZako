<?php

namespace App\Filament\Resources\HomeContactPageResource\Pages;

use App\Filament\Resources\HomeContactPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHomeContactPage extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = HomeContactPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

        ];
    }
}
