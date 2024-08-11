<?php

namespace App\Filament\Resources\BranchResource\Pages;

use App\Filament\Resources\BranchResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

class ListBranches extends ListRecords
{
    protected static string $resource = BranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array{
        return [
            'All' => \Filament\Resources\Components\Tab::make('All'),
            'Approved' => \Filament\Resources\Components\Tab::make('Approved')
            ->modifyQueryUsing(function ($query){
                $query->where('approved', 1);
            }),
            'Unapproved' => \Filament\Resources\Components\Tab::make('Unapproved')
            ->modifyQueryUsing(function ($query){
                $query->where('approved', 0);
            }),
        ];
    }
}
