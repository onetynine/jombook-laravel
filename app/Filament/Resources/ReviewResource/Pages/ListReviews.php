<?php

namespace App\Filament\Resources\ReviewResource\Pages;

use App\Filament\Resources\ReviewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReviews extends ListRecords
{
    protected static string $resource = ReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array{
        return [
            'All' => \Filament\Resources\Components\Tab::make('All'),
            'Authentic' => \Filament\Resources\Components\Tab::make('Authentic')
            ->modifyQueryUsing(function ($query){
                $query->where('status', 'Authentic');
            }),
            'Inappropriate' => \Filament\Resources\Components\Tab::make('Inappropriate')
            ->modifyQueryUsing(function ($query){
                $query->where('status', 'Inappropriate');
            }),
            'Spam' => \Filament\Resources\Components\Tab::make('Spam/Fake/Paid')
            ->modifyQueryUsing(function ($query){
                $query->where('status', 'Spam');
            }),
            'Unchecked' => \Filament\Resources\Components\Tab::make('Unchecked')
            ->modifyQueryUsing(function ($query){
                $query->where('status', 'Unchecked');
            }),
        ];
    }
}
