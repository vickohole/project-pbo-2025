<?php

namespace App\Filament\Payment\Resources\Make:migrationResource\Pages;

use App\Filament\Payment\Resources\Make:migrationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMake:migration extends EditRecord
{
    protected static string $resource = Make:migrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
