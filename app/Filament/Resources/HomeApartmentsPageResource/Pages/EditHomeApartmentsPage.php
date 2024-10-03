<?php

namespace App\Filament\Resources\HomeApartmentsPageResource\Pages;

use App\Filament\Resources\HomeApartmentsPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeApartmentsPage extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = HomeApartmentsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
