<?php

namespace App\Filament\Resources\PrivacyPolicyResource\Pages;

use App\Filament\Resources\PrivacyPolicyResource;
use App\Models\PrivacyPolicy;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrivacyPolicies extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = PrivacyPolicyResource::class;

    protected function getHeaderActions(): array
    {
       
        $privacyPolicyExists = PrivacyPolicy::exists();

        return array_filter([
           
            !$privacyPolicyExists ? Actions\CreateAction::make() : null,
            Actions\LocaleSwitcher::make(),
        ]);
    }
}
