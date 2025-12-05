<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Check if admin already exists
        if (!User::where('role', 'admin')->exists()) {
            User::create([
                'name' => 'Administrator',
                'email' => 'admin@example.com', // optional
                'account_id' => 'ADMIN01',      // fixed or auto-generated
                'password' => Hash::make('ADMIN01'), // initial password same as account_id
                'role' => 'admin',
            ]);
        }
    }
}
