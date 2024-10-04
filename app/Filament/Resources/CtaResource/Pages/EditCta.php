<?php

namespace App\Filament\Resources\CtaResource\Pages;

use App\Filament\Resources\CtaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCta extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = CtaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}
