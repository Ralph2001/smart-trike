<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverQueue extends Model
{
    use HasFactory;

    protected $table = 'driver_queue';


    protected $fillable = [
        'driver_id',
        'queue_position',
        'status',
    ];

    // Relationship with the Driver/User
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
}