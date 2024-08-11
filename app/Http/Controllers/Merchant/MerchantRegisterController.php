<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Merchant;


use Illuminate\Http\Request;

class MerchantRegisterController 
{
    public function showRegistrationForm()
    {
        return view('auth.merchant.register');

    }


}
