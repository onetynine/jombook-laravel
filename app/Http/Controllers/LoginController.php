<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validate login credentials
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Check the default role of the user
            if ($user->default_role === 'merchant' && $request->input('login_type') === 'customer') {
                // Merchant attempting to log in through customer login form, deny access
                Auth::logout(); // Log out the user
                return redirect()->route('login')
                ->with('error', 'Oops! Are you trying to log in as a merchant? Click <a href="' . url('merchant/login') . '">here</a> instead.');

            }

            // Check the default role of the user
            elseif ($user->default_role === 'customer' && $request->input('login_type') === 'customer') {
                // intended behaviour, if customer, logs customer
                Auth::login($user); // Log in the user
                return redirect()->route('welcome');
            }    
            
             // 3
            elseif ($user->default_role === 'customer' && $request->input('login_type') === 'merchant') {
                // customer attempting to log in through merchant login form, deny access
                Auth::logout(); // Log out the user
                return redirect()->route('auth.merchant.login')
                ->with('error', 'Oops! Are you trying to log in as a customer?');
            }
            
            // 4
            elseif ($user->default_role === 'merchant' && $request->input('login_type') === 'merchant') {
                // intended behaviour, if customer, logs customer
                Auth::login($user); // Log in the user
                return redirect('/merchant');
            }             

            // Redirect the user to the dashboard or appropriate route based on their role
            return redirect()->route('auth.merchant.login');
        }

        if ($request->input('login_type') === 'merchant'){
        // Authentication failed, redirect back to the login page with error
        return redirect()->route('auth.merchant.login')->with('error', 'Wrong Login info.');
        }
        elseif ($request->input('login_type') === 'customer'){
            return redirect()->route('login')->with('error', 'Wrong Login info.');
        }
    }
}
