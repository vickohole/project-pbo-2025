<?php

namespace App\Filament\Admin\Resources\Make:modelResource\Pages;

use App\Filament\Admin\Resources\Make:modelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMake:model extends EditRecord
{
    protected static string $resource = Make:modelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
