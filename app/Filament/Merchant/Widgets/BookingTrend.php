<?php

namespace App\Filament\Merchant\Widgets;

use Filament\Widgets\ChartWidget;
use App\Model\Booking;
use App\Models\Booking as ModelsBooking;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;


// https://github.com/Flowframe/laravel-trend

class BookingTrend extends ChartWidget
{
    protected static ?string $heading = 'Booking Trend';

    protected function getData(): array
    {
        $user = filament()->auth()->user();
        $merchant = $user->merchant;

        $branchIds = $merchant->branch->pluck('id');

        $data = Trend::query(
            ModelsBooking::whereIn('branch_id', $branchIds)
        )
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();
 
    return [
        'datasets' => [
            [
                'label' => 'Booking Trend',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
protected function getFilters(): ?array
{
    return [
        'today' => 'Today',
        'week' => 'Last week',
        'month' => 'Last month',
        'year' => 'This year',
    ];
}

}
