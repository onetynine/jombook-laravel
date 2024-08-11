<?php
namespace App\Filament\Merchant\Widgets;

use App\Models\Booking;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class RecentBooking extends BaseWidget
{
    protected static ?int $sort = 1;

    public function table(Table $table): Table
    {
        return $table
            ->query($this->getRecentBookingsQuery())
            ->columns([
                Tables\Columns\TextColumn::make('branch.name')
                    ->label('Branch')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('User')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slot')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('accepted')
                    ->searchable(),
            ]);
    }

    protected function getRecentBookingsQuery(): Builder
    {
        $user = filament()->auth()->user();
        $merchant = $user->merchant;

        if (!$merchant) {
            return Booking::query()->whereNull('id'); // No bookings if no merchant
        }

        $branchIds = $merchant->branch->pluck('id');

        return Booking::query()
            ->whereIn('branch_id', $branchIds)
            ->orderBy('created_at', 'desc');
    }
}

