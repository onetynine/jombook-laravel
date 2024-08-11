<?php

namespace App\Listeners;

use App\Models\User;
use App\Models\AdminProfile;
use App\Models\MerchantProfile;
use App\Models\UserProfile;
use Illuminate\Auth\Events\Registered;

class CreateProfile
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */


    public function handle(Registered $event)
    {
        $user = $event->user;

        // Check the user's role and create the corresponding profile
        switch ($user->role_id) {
            case 1: // Admin
                AdminProfile::create(['user_id' => $user->id]);
                break;
            case 2: // Merchant
                MerchantProfile::create(['user_id' => $user->id]);
                break;
            case 3: // Customer
                UserProfile::create(['user_id' => $user->id]);
                break;
            // Add more cases for other roles if needed
        }
    }
}
