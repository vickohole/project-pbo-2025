<?php

namespace App\Filament\Admin\Resources\CustomerResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Filament\Actions;
use App\Filament\Admin\Resources\CustomerResource;



class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
