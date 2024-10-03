<?php

namespace App\Filament\Resources\HomeApartmentsPageResource\Pages;

use App\Filament\Resources\HomeApartmentsPageResource;
use App\Models\HomeApartmentsPage;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeApartmentsPages extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = HomeApartmentsPageResource::class;

    protected function getHeaderActions(): array
    {

        $privacyPolicyExists = HomeApartmentsPage::exists();

        return array_filter([

            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
