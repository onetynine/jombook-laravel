<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AdminController extends Controller
{
    // Dashboard action
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Other actions specific to admin functionality
}