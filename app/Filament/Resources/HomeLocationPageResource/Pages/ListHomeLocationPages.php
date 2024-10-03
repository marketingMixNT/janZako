<?php

namespace App\Filament\Resources\HomeLocationPageResource\Pages;

use App\Filament\Resources\HomeLocationPageResource;
use App\Models\HomeLocationPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeLocationPages extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = HomeLocationPageResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = HomeLocationPage::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
