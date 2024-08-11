<x-filament-panels::page>

    <x-filament::card>

        <br>
        <x-filament::section icon="heroicon-o-building-storefront">
            <x-slot name="heading">
                Merchant Details
            </x-slot>

            <x-label class="mb-2">Name</x-label>
            <x-filament::input.wrapper class="mb-4" :valid="!$errors->has('company_name')">
                <x-filament::input type="text" wire:model="company_name" />
            </x-filament::input.wrapper>
            @error('company_name')
                <div class="">{{ $message }}</div><br>
            @enderror

            <x-label class="mb-2">Registration Number</x-label>
            <x-filament::input.wrapper class="mb-4" :valid="!$errors->has('registration_number')">
                <x-filament::input type="text" wire:model="registration_number" />
            </x-filament::input.wrapper>
            @error('registration_number')
                <div class="">{{ $message }}</div><br>
            @enderror

            <x-label class="mb-2">Registration Document</x-label>
            <x-filament::input.wrapper class="mb-4" :valid="!$errors->has('registration_document')">
                <x-filament::input type="file" wire:model="registration_document" />
            </x-filament::input.wrapper>
            @error('registration_document')
                <div class="">{{ $message }}</div><br>
            @enderror
            <x-label class="mb-2">Business Type</x-label>
            <x-filament::input.wrapper class="mb-4" :valid="!$errors->has('business_type')">
                <x-filament::input type="text" wire:model="business_type" />
            </x-filament::input.wrapper>
            @error('business_type')
                <div class="">{{ $message }}</div><br>
            @enderror
        </x-filament::section>
        <br>
        <x-filament::section icon="heroicon-o-user">
            <x-slot name="heading">
                In-Charge Details
            </x-slot>
            <x-label class="mb-2">Name</x-label>
            <x-filament::input.wrapper class="mb-4" :valid="!$errors->has('in_charge_name')">
                <x-filament::input type="text" wire:model="in_charge_name" />
            </x-filament::input.wrapper>
            @error('in_charge_name')
                <div class="">{{ $message }}</div><br>
            @enderror
            <x-label class="mb-2">NRIC</x-label>
            <x-filament::input.wrapper class="mb-4" :valid="!$errors->has('in_charge_nric')">
                <x-filament::input type="number" wire:model="in_charge_nric" />
            </x-filament::input.wrapper>
            @error('in_charge_nric')
                <div class="">{{ $message }}</div><br>
            @enderror
            <x-label class="mb-2">Designation</x-label>
            <x-filament::input.wrapper class="mb-4" :valid="!$errors->has('in_charge_designation')">
                <x-filament::input type="text" wire:model="in_charge_designation" />
            </x-filament::input.wrapper>
            @error('in_charge_designation')
                <div class="">{{ $message }}</div><br>
            @enderror
            <x-label class="mb-2">Contact</x-label>
            <x-filament::input.wrapper class="mb-4" :valid="!$errors->has('in_charge_contact')">
                <x-filament::input type="text" wire:model="in_charge_contact" />
            </x-filament::input.wrapper>
            @error('in_charge_contact')
                <div class="">{{ $message }}</div><br>
            @enderror
        </x-filament::section>
        <br>
        <x-filament::button wire:click="saveChanges">
            Save Changes
        </x-filament::button>

    </x-filament::card>
    <x-filament::link :href="url('/user/profile')">
        Go to Security Settings
    </x-filament::link>
</x-filament-panels::page>
