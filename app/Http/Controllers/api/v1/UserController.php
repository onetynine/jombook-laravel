<?php

namespace App\Http\Controllers\api\v1;

use App\Models\User;
use App\Models\Customer;
use App\Models\Merchant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'contact' => 'required|string',
            'date_of_birth' => 'required|date',
            'registration_number' => 'required|date',
            'business_type' => 'required|date',
            'in_charge_name' => 'required|date',
            'in_charge_nric' => 'required|date',
            'in_charge_designation' => 'required|date',
            'in_charge_contact' => 'required|date',
        ]);

        DB::beginTransaction();

        try {
            // Storing validated data
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]);
            $customer = Customer::create([
                'user_id' => $user->id,
                'contact' => $validatedData['contact'],
                'date_of_birth' => $validatedData['date_of_birth'],
            ]);

            $merchant = Merchant::create([
                'user_id' => $user->id,
                'registration_number' => $validatedData['registration_number'],
                'registration_document' => $validatedData['registration_document'],
                'business_type' => $validatedData['business_type'],
                'in_charge_name' => $validatedData['in_charge_name'],
                'in_charge_nric' => $validatedData['in_charge_nric'],
                'in_charge_designation' => $validatedData['in_charge_designation'],
                'in_charge_contact' => $validatedData['in_charge_contact'],

            ]);
            DB::commit(); // All good, commit the transaction
            return response()->json([
                'user' => $user,
                'customer' => $customer,
                'merchant' => $merchant,
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack(); // Something went wrong, roll back the transaction
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        return User::findOrFail($id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|string|min:8',
        ]);

        $user->update($validatedData);

        return response()->json($user);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(null, 204);
    }
}
