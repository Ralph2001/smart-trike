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
        return view('auth.signup');
    }

    public function showDispatcherForm()
    {
        $barangays = \App\Models\Barangay::all();

        return view('auth.signup_dispatcher', compact('barangays'));
    }

    public function showDriverForm()
    {
       $barangays = \App\Models\Barangay::all();
        return view('auth.signup_driver', compact('barangays'));
    }

    // Register Dispatcher
    public function registerDispatcher(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'barangay_id' => 'required|exists:barangays,id',
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
            'barangay_id' => $request->barangay_id,
        ]);

        return redirect()->route('login')->with('info', 'Dispatcher account created. Account ID: ' . $accountId);
    }

    // Register Driver
    public function registerDriver(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'barangay_id' => 'required|exists:barangays,id',
        ]);

        // Generate account_id
        do {
            $accountId = strtoupper(Str::random(6));
        } while (User::where('account_id', $accountId)->exists());

        $user = User::create([
            'name' => $request->name,
            'role' => 'driver',
            'account_id' => $accountId,
            'password' => Hash::make($accountId),
        ]);

        DriverInformation::create([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'barangay_id' => $request->barangay_id,
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
                    return redirect()->route('driver.dashboard');
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
