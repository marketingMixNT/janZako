<?php

namespace App\Filament\Resources\TestimonialHomeResource\Pages;

use App\Filament\Resources\TestimonialHomeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimonialHome extends EditRecord
{
    protected static string $resource = TestimonialHomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
