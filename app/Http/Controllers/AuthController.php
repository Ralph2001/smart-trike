<?php

namespace App\Http\Controllers;

use App\Models\DispatcherInformation;
use App\Models\DriverInformation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    //

    public function showRegistrationForm()
    {
        // return view('auth.signup');
        return view('auth.signup_driver');

    }

    // public function showDispatcherForm()
    // {

    //     return view('auth.signup_dispatcher');
    // }

    public function showDriverForm()
    {

        return view('auth.signup_driver');
    }

    // Register Dispatcher
    public function registerDispatcher(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
       
        ]);

        // Generate account_id
        do {
            $accountId = strtoupper(Str::random(6));
        } while (User::where('account_id', $accountId)->exists());

        $user = User::create([
            'name' => $request->name,
            'role' => 'dispatcher',
            'account_id' => $accountId,
            'password' => Hash::make($accountId),
        ]);

        DispatcherInformation::create([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        
        ]);

        return redirect()->route('login')->with('info', 'Dispatcher account created. Account ID: ' . $accountId);
    }

    // Register Driver
   public function registerDriver(Request $request)
{
    // Validation rules
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'contact_number' => 'nullable|string|max:20',
        'birthdate' => 'nullable|date',
        'license_number' => 'nullable|string|max:255',
        'operator_name' => 'nullable|string|max:255',
        'operator_contact' => 'nullable|string|max:20',
        'mtop_number' => 'nullable|string|max:255',
        'plate_number' => 'nullable|string|max:255',
    ]);

    // Generate account_id
    do {
        $accountId = strtoupper(Str::random(6));
    } while (User::where('account_id', $accountId)->exists());

    // Create the user (driver)
    $user = User::create([
        'name' => $request->first_name . ' ' . $request->last_name,
        'role' => 'driver',
        'account_id' => $accountId,
        'password' => Hash::make($accountId),
    ]);

    // Create the driver information
    DriverInformation::create([
        'user_id' => $user->id,
        'first_name' => $request->first_name,
        'middle_name' => $request->middle_name,
        'last_name' => $request->last_name,
        'suffix' => $request->suffix,
        'contact_number' => $request->contact_number,
        'address' => $request->address,
        'birthdate' => $request->birthdate,
        'license_number' => $request->license_number,
        'license_expiry_date' => $request->license_expiry_date,
        'operator_name' => $request->operator_name,
        'operator_contact' => $request->operator_contact,
        'operator_address' => $request->operator_address,
        'mtop_number' => $request->mtop_number,
        'plate_number' => $request->plate_number,
    ]);

    return redirect()->route('login')->with('info', 'Driver account created. Account ID: ' . $accountId);
}

    // Login / Logout
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'account_id' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('account_id', $request->account_id)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'dispatcher':
                    return redirect()->route('dispatcher.dashboard');
                case 'driver':
                    return redirect()->route('driver.home');
                default:
                    Auth::logout();
                    return redirect()->route('login');
            }
        }

        return back()->withErrors(['account_id' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
