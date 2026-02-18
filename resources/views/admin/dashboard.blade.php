@extends('layouts.dashboard')

@section('content')
<div class="min-h-screen bg-white md:bg-gray-50/30 p-4 lg:p-10 overflow-y-auto">
    <div class="w-full ">
        
        <!-- Header Section -->
        <header class="mb-10">
            <h1 class="text-3xl font-bold text-gray-900 tracking-tight">Welcome, {{ auth()->user()->username }}</h1>
        </header>

        <!-- Dashboard Stats Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Active Drivers -->
            <div class="bg-white p-6 rounded-lg shadow-xs border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">Active Drivers</h2>
                <p class="text-3xl text-blue-500 mt-2" id="activeDrivers">50</p>
                <p class="text-gray-500 text-sm mt-2">Total active drivers currently in queue.</p>
            </div>

            <!-- Pending Trips -->
            <div class="bg-white p-6 rounded-lg shadow-xs border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">Active Trips</h2>
                <p class="text-3xl text-orange-500 mt-2" id="pendingTrips">12</p>
                <p class="text-gray-500 text-sm mt-2">Trips that are still on ride.</p>
            </div>

            <!-- Completed Trips -->
            <div class="bg-white p-6 rounded-lg shadow-xs border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">Completed Trips</h2>
                <p class="text-3xl text-green-500 mt-2" id="completedTrips">105</p>
                <p class="text-gray-500 text-sm mt-2">Total trips completed today.</p>
            </div>
        </div>

      
       
    </div>
</div>
@endsection
