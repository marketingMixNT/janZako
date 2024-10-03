<?php

namespace App\Filament\Resources\HomeLocationPageResource\Pages;

use App\Filament\Resources\HomeLocationPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeLocationPage extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = HomeLocationPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
