<?php

namespace App\Actions\Fortify;
use App\Models\User;
use App\Models\Merchant;
use App\Models\Customer;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Models\Role;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {

        // Retrieve the role ID from the input
        $defaultRole = $input['default_role'];
        // dd($defaultRole);

        if ($defaultRole === 'merchant') {
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
                'registration_number' => ['required', 'string', 'max:255'],
                // 'registration_document' => ['string', 'max:255'],
                'name' => ['required', 'string', 'max:255'],
                'business_type' => ['required', 'string', 'max:255'],
                'in_charge_name' => ['required', 'string', 'max:255'],
                'in_charge_nric' => ['required', 'string', 'max:255'],
                'in_charge_designation' => ['required', 'string', 'max:255'],
                'in_charge_contact' => ['required', 'string', 'max:255'],
            ])->validate();
        
            $user = User::create([
                'default_role' => $defaultRole,
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]);
            $user->save();

            $merchant = Merchant::create([
                'company_name' => $input['name'],
                'registration_number' => $input['registration_number'],
                'business_type' => $input['business_type'],
                'in_charge_name' => $input['in_charge_name'],
                'in_charge_nric' => $input['in_charge_nric'],
                'in_charge_designation' => $input['in_charge_designation'],
                'in_charge_contact' => $input['in_charge_contact'],
            ]);
            $user->merchant()->save($merchant);
            return $user;
        }
        
        elseif ($defaultRole === 'customer') {
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => $this->passwordRules(),
                'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
                'contact' => ['required', 'string', 'max:255'],
                'date_of_birth' => ['required', 'string', 'max:255'],
            ])->validate();
        
            $user = User::create([
                'default_role' => $defaultRole,
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]);
            $user->save();

            $customer = Customer::create([
                'customer_name' => $input['name'],
                'contact' => $input['contact'],
                'date_of_birth' => $input['date_of_birth'],

            ]);
            $user->customer()->save($customer);
            return $user;

            
        }
        return redirect('/merchant/login');
        
    }
}
