<?php

namespace App\Filament\Merchant\Widgets;

use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MerchantStat extends BaseWidget
{
    protected static ?int $sort = -2;

    protected function getStats(): array
    {


return [
    Stat::make('New Booking (pending)', '')
        ->value('12')
        ->description("See all pending bookings")
        ->descriptionIcon('heroicon-m-users', IconPosition::Before),
    Stat::make('Successful Booking', '')
        ->value('80')
        ->description("Checklist")
        ->descriptionIcon('heroicon-m-users', IconPosition::Before),
    Stat::make('Average Rating', '')
        ->value('4.6')
        ->description("from 43 reviews")
        ->descriptionIcon('heroicon-m-star', IconPosition::Before),
];

    }
}
