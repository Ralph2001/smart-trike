<?php

namespace App\Http\Controllers;

use App\Models\DriverInformation;
use App\Models\DriverQueue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $driverInfo = $user->driverInfo;

        // Check if the driver is in the queue and get the position
        $queue = DriverQueue::where('driver_id', $user->id)->where('status', 'waiting')->first();

        // If the driver is in the queue, pass the queue position to the view
        if ($queue) {
            $queuePosition = $queue->queue_position;
        } else {
            $queuePosition = null;  // Driver is not in the queue
        }

        return view('driver.home', compact('driverInfo', 'queuePosition'));
    }

    public function checkIn(Request $request)
    {
        $user = Auth::user();

        // 1. Check if the driver is already waiting
        $isWaiting = DriverQueue::where('driver_id', $user->id)
            ->where('status', 'waiting')
            ->exists();

        if ($isWaiting) {
            return redirect()->back()->with('error', 'You are already in the queue.');
        }

        // 2. Calculate next position once
        $nextPosition = DriverQueue::where('status', 'waiting')->max('queue_position') + 1;

        // 3. Create the entry (Handles both first-time check-in and post-ride reset)
        DriverQueue::create([
            'driver_id'      => $user->id,
            'queue_position' => $nextPosition,
            'status'         => 'waiting',
        ]);

        return redirect()->back()->with('success', "Checked in successfully. Your queue position is $nextPosition.");
    }
}
