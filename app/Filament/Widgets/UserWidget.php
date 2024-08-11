<?php

namespace App\Filament\Widgets;
use App\Models\User;
use App\Models\Merchant;
use App\Models\Customer;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserWidget extends BaseWidget
{
    protected function getStats(): array
    {
    // User Registration Trend Logic
    $thisMonthUsers = User::whereMonth('created_at', now()->month)->count();
    $lastMonthUsers = User::whereMonth('created_at', now()->subMonth()->month)->count();
    $change = $thisMonthUsers - $lastMonthUsers;
    $color = $change > 0 ? 'success' : ($change < 0 ? 'danger' : 'primary');
    $description = $change > 0 ? "This month: $thisMonthUsers (↑ $change from last month)" :
                        ($change < 0 ? "This month: $thisMonthUsers (↓ -$change from last month)" :
                        "This month: $thisMonthUsers (no change from last month)");

    // Merchant Registration Trend Logic
    $thisMonthMerchants = Merchant::whereMonth('created_at', now()->month)->count();
    $lastMonthMerchants = Merchant::whereMonth('created_at', now()->subMonth()->month)->count();
    $change = $thisMonthMerchants - $lastMonthMerchants;
    $color = $change > 0 ? 'success' : ($change < 0 ? 'danger' : 'primary');
    $description = $change > 0 ? "This month: $thisMonthMerchants (↑ $change from last month)" :
                        ($change < 0 ? "This month: $thisMonthMerchants (↓ -$change from last month)" :
                        "This month: $thisMonthMerchants (no change from last month)");    

    // Customer Registration Trend Logic
    $thisMonthCustomers = Customer::whereMonth('created_at', now()->month)->count();
    $lastMonthCustomers = Customer::whereMonth('created_at', now()->subMonth()->month)->count();
    $change = $thisMonthCustomers - $lastMonthCustomers;
    $color = $change > 0 ? 'success' : ($change < 0 ? 'danger' : 'primary');
    $description = $change > 0 ? "This month: $thisMonthCustomers (↑ $change from last month)" :
                        ($change < 0 ? "This month: $thisMonthCustomers (↓ -$change from last month)" :
                        "This month: $thisMonthCustomers (no change from last month)");    

    return [
        Stat::make('New Users', '')
            ->value($thisMonthUsers)
            ->description("This month: $thisMonthUsers (vs. $lastMonthUsers last month)")
            ->descriptionIcon('heroicon-m-users', IconPosition::Before)
            ->chart([$lastMonthUsers, $thisMonthUsers])
            ->color($color),
        Stat::make('New Merchants', '')
            ->value($thisMonthMerchants)
            ->description("This month: $thisMonthMerchants (vs. $lastMonthMerchants last month)")
            ->descriptionIcon('heroicon-m-users', IconPosition::Before)
            ->chart([$lastMonthMerchants, $thisMonthMerchants])
            ->color($color),
        Stat::make('New Customer', '')
            ->value($thisMonthCustomers)
            ->description("This month: $thisMonthCustomers (vs. $lastMonthCustomers last month)")
            ->descriptionIcon('heroicon-m-users', IconPosition::Before)
            ->chart([$lastMonthCustomers, $thisMonthCustomers])
            ->color($color),

    ];
}
}
