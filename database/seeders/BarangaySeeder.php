<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barangay;

class BarangaySeeder extends Seeder
{
    public function run(): void
    {
        $barangays = [
            ['name' => 'Poblacion', 'code' => 'POB', 'description' => 'Town proper'],
            ['name' => 'San Roque', 'code' => 'SR', 'description' => 'Northern Barangay'],
            ['name' => 'Sta. Rita', 'code' => 'SRITA', 'description' => 'Eastern Barangay'],
            ['name' => 'San Vicente', 'code' => 'SV', 'description' => 'Western Barangay'],
            ['name' => 'San Juan', 'code' => 'SJ', 'description' => 'Southern Barangay'],
        ];

        foreach ($barangays as $b) {
            Barangay::create($b);
        }
    }
}
