<?php

namespace App\Filament\Resources\HomeContactPageResource\Pages;

use App\Filament\Resources\HomeContactPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeContactPage extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = HomeContactPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
