<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    use HasFactory;

    protected $table = 'barangays';

    protected $fillable = [
        'name',          // Barangay name
        'code',          // Optional code or abbreviation
        'description',   // Optional description
    ];

    // Relations
    public function drivers()
    {
        return $this->hasMany(DriverInformation::class);
    }

    public function dispatchers()
    {
        return $this->hasMany(DispatcherInformation::class);
    }
}
