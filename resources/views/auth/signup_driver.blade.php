@extends('layouts.app')

@section('content')
<div class="flex-1 bg-gray-100 flex items-center p-4 justify-center">
    <div class="max-w-4xl border border-gray-200 gap-6 rounded-2xl h-full w-full bg-white shadow flex flex-col px-8 py-12">

        <form action="#" class="space-y-10" method="POST">

            @csrf
            <!-- Personal Information Section -->
            <div class="space-y-6">
                <h2 class="text-slate-900  text-2xl font-bold leading-tight tracking-[-0.015em] border-b border-slate-200  pb-3">Driver Personal Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">First Name</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter first name" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Middle Name</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter middle name" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Last Name</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter last name" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Suffix</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="e.g. Jr." type="text" />
                    </label>
                    <label class="flex flex-col md:col-span-2">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Address</p>
                        <textarea class="form-textarea flex w-full min-w-0 flex-1 resize-y overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  min-h-24 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter your full address"></textarea>
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Contact Number</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="e.g. 09123456789" type="tel" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Birthdate</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" type="date" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">License Number</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter license number" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">License Expiry Date</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" type="date" />
                    </label>
                </div>
            </div>
            <!-- Operator Information Section -->
            <div class="space-y-6">
                <h2 class="text-slate-900  text-2xl font-bold leading-tight tracking-[-0.015em] border-b border-slate-200  pb-3">Operator Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Operator Name</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter operator's full name" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Operator Contact</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter operator's contact number" type="tel" />
                    </label>
                    <label class="flex flex-col md:col-span-2">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Operator Address</p>
                        <textarea class="form-textarea flex w-full min-w-0 flex-1 resize-y overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  min-h-24 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter operator's full address"></textarea>
                    </label>
                </div>
            </div>
            <!-- Tricycle Information Section -->
            <div class="space-y-6">
                <h2 class="text-slate-900  text-2xl font-bold leading-tight tracking-[-0.015em] border-b border-slate-200  pb-3">Tricycle Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">MTOP Number</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter MTOP number" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Tricycle Body Number</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter body number" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Plate Number</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter plate number" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Engine Number</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter engine number" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Chassis Number</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="Enter chassis number" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Color</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="e.g. Blue" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Model</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="e.g. Honda TMX" type="text" />
                    </label>
                    <label class="flex flex-col">
                        <p class="text-slate-800 text-base font-medium leading-normal pb-2">Year Acquired</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 placeholder:text-slate-400 p-3 text-base font-normal leading-normal" placeholder="e.g. 2022" type="number" />
                    </label>
                </div>
            </div>
            <!-- Barangay Assignment Section -->
            <div class="space-y-6">
                <h2 class="text-slate-900  text-2xl font-bold leading-tight tracking-[-0.015em] border-b border-slate-200  pb-3">Barangay Assignment</h2>
                <label class="flex flex-col">
                    <p class="text-slate-800 text-base font-medium leading-normal pb-2">Barangay</p>
                    <select class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded text-slate-900  focus:outline-none focus:ring-2 focus:ring-primary/50 border border-slate-300  bg-white focus:border-primary  h-12 p-3 text-base font-normal leading-normal">
                        @foreach($barangays as $barangay)
                        <option value="{{ $barangay->id }}">
                            {{ $barangay->name }}
                        </option>
                        @endforeach
                    </select>
                </label>
            </div>
            <!-- Form Submission -->
            <div class="flex flex-col items-center gap-4 pt-4">
                <button class="w-full flex min-w-[84px] bg-green-500 hover:bg-green-600 cursor-pointer items-center justify-center overflow-hidden rounded h-12 px-6 bg-primary text-white text-base font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary/50" type="submit">
                    <span class="truncate">Register Driver</span>
                </button>

                <div class="text-center mt-2">

                    <p class="text-sm text-gray-700 font-medium">Already have an account? <a href="{{ route('login') }}" class="text-blue-600 underline ml-1">Login</a></p>

                </div>
            </div>
        </form>

    </div>
</div>
@endsection

@section('scripts')
<script>
</script>
@endsection