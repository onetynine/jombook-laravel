<?php

namespace App\Filament\Merchant\Pages;

use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Hash;
use Filament\Forms;
use Illuminate\Support\Facades\Auth;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $view = 'filament.merchant.pages.settings';

    protected static ?int $navigationSort = 4;

    public $email;
    public $password;
    public $confirm_password;

    public $company_name;
    public $registration_number;
    public $registration_document;
    public $business_type;

    public $in_charge_name;
    public $in_charge_nric;
    public $in_charge_designation;
    public $in_charge_contact;

    public function mount()
    {
        $user = Auth::user();
        $merchant = $user->merchant;

        $this->company_name = $merchant->company_name;
        $this->registration_number = $merchant->registration_number;
        $this->registration_document = $merchant->registration_document;
        $this->business_type = $merchant->business_type;

        $this->in_charge_name = $merchant->in_charge_name;
        $this->in_charge_nric = $merchant->in_charge_nric;
        $this->in_charge_designation = $merchant->in_charge_designation;
        $this->in_charge_contact = $merchant->in_charge_contact;


    }

    public function saveChanges()
    {
        // Validation logic
        $this->validate([
            'company_name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255',
            'registration_document' => 'nullable',
            'business_type' => 'required|string|max:255',

            'in_charge_name' => 'required|string|max:255',
            'in_charge_nric' => 'required|string|max:255',
            'in_charge_designation' => 'required|string|max:255',
            'in_charge_contact' => 'required|string|max:255',
        ]);

        // Save settings to the database
        $user = Auth::user();
        $merchant = $user->merchant;

        $user->name = $this->company_name;

        $merchant->company_name = $this->company_name;
        $merchant->registration_number = $this->registration_number;
        $merchant->registration_document = $this->registration_document;
        $merchant->business_type = $this->business_type;

        $merchant->in_charge_name = $this->in_charge_name;
        $merchant->in_charge_nric = $this->in_charge_nric;
        $merchant->in_charge_designation = $this->in_charge_designation;
        $merchant->in_charge_contact = $this->in_charge_contact;

        $merchant->save();

        Notification::make()
            ->title('Profile updated successfully')
            ->success()
            ->send();
    }
}

