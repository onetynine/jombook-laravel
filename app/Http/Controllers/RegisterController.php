<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Models\Merchant;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
        /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request){
       
    if ($request->input('register_type') === 'merchant') {
        // Create user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('user_email'),
            'password' => bcrypt($request->input('user_password')),
        ]);

        $merchant = Merchant::create([          
            'registration_number' => $request->input('registration_number'),
            'registration_document' => $request->input('registration_document'),
            'business_type' => $request->input('business_type'),
            'in_charge_name' => $request->input('in_charge_name'),
            'in_charge_nric' => $request->input('in_charge_nric'),
            'in_charge_designation' => $request->input('in_charge_designation'),
            'in_charge_contact' => $request->input('in_charge_contact'),
            'reviewed' => $request->input('reviewed'),

        ]);
        


    }


}
}
