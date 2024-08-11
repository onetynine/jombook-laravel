<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
// class LogoutController extends Controller 
// {
//     public function logout(Request $request)
//     {
        
//         $user = Auth::user();

//                 // Redirect based on the default role
//                 if ($user->default_role === 'merchant') {
//                     return redirect('/merchant/login');
//                 } elseif ($user->default_role === 'admin') {
//                     return redirect('/admin/login');
//                 } elseif ($user->default_role === 'customer') {
//                     return redirect('/login');
//                 }    

//     }
// }
