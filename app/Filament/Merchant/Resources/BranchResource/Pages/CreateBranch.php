<?php

namespace App\Filament\Merchant\Resources\BranchResource\Pages;

use App\Filament\Merchant\Resources\BranchResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBranch extends CreateRecord
{
    protected static string $resource = BranchResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['merchant_id'] = auth()->user()->merchant->id;
 
    return $data;
}
}

