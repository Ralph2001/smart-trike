<aside class="w-64 border-r border-gray-300">
    <div class="overflow-y-auto h-full flex flex-col bg-neutral-primary-soft">
        <!-- Header -->
        <p class="font-mono text-xl text-green-500 font-medium py-4 text-center">SMART TRIKE</p>

        <!-- Sidebar Menu -->
        <ul class="space-y-3 font-medium">

            {{-- Home: Visible to all --}}
            <li>
                <a class="flex items-center px-3 py-2 text-body rounded hover:bg-neutral-tertiary hover:text-fg-brand group">
                    <x-heroicon-o-home class="w-5 h-5 text-gray-500 group-hover:text-fg-brand transition duration-150" />
                    <span class="ml-3">Home</span>
                </a>
            </li>

            {{-- Admin Only --}}
            @if(auth()->user()->role === 'admin')
                <li>
                    <a  class="flex items-center px-3 py-2 text-body rounded hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <x-heroicon-o-users class="w-5 h-5 text-gray-500 group-hover:text-fg-brand transition duration-150" />
                        <span class="ml-3">Manage Dispatcher</span>
                    </a>
                </li>

                <li>
                    <a  class="flex items-center px-3 py-2 text-body rounded hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <x-tabler-helmet class="w-5 h-5 text-gray-500 group-hover:text-fg-brand transition duration-150" />
                        <span class="ml-3">Manage Driver</span>
                    </a>
                </li>

                <li>
                    <a  class="flex items-center px-3 py-2 text-body rounded hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <x-heroicon-o-chart-bar class="w-5 h-5 text-gray-500 group-hover:text-fg-brand transition duration-150" />
                        <span class="ml-3">Report & Analytics</span>
                    </a>
                </li>
            @endif

            {{-- Dispatcher Only --}}
            @if(auth()->user()->role === 'dispatcher')
                <li>
                    <a  class="flex items-center px-3 py-2 text-body rounded hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <x-heroicon-o-clipboard-document class="w-5 h-5 text-gray-500 group-hover:text-fg-brand transition duration-150" />
                        <span class="ml-3">Tricycle Queue</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center px-3 py-2 text-body rounded hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <x-heroicon-o-truck class="w-5 h-5 text-gray-500 group-hover:text-fg-brand transition duration-150" />
                        <span class="ml-3">Assign Drivers</span>
                    </a>
                </li>

                <li>
                    <a  class="flex items-center px-3 py-2 text-body rounded hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <x-heroicon-o-clock class="w-5 h-5 text-gray-500 group-hover:text-fg-brand transition duration-150" />
                        <span class="ml-3">Shift Management</span>
                    </a>
                </li>
            @endif

            {{-- Driver Only --}}
            @if(auth()->user()->role === 'driver')
                <!-- <li>
                    <a  class="flex items-center px-3 py-2 text-body rounded hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <x-heroicon-o-user class="w-5 h-5 text-gray-500 group-hover:text-fg-brand transition duration-150" />
                        <span class="ml-3">My Profile</span>
                    </a>
                </li> -->


                <!-- <li>
                    <a class="flex items-center px-3 py-2 text-body rounded hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <x-heroicon-o-clipboard-document-check class="w-5 h-5 text-gray-500 group-hover:text-fg-brand transition duration-150" />
                        <span class="ml-3">Trip History</span>
                    </a>
                </li>

                <li>
                    <a class="flex items-center px-3 py-2 text-body rounded hover:bg-neutral-tertiary hover:text-fg-brand group">
                        <x-heroicon-o-clock class="w-5 h-5 text-gray-500 group-hover:text-fg-brand transition duration-150" />
                        <span class="ml-3">My Shift</span>
                    </a>
                </li> -->
            @endif
        </ul>

        {{-- Logout Button --}}
        <form method="POST" class="mt-auto" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-sm cursor-pointer border-t font-medium py-4 hover:bg-red-50 border-gray-300 w-full flex items-center justify-center">
                <x-heroicon-o-arrow-right-start-on-rectangle class="w-5 h-5 text-gray-500 mr-2" />
                Logout
            </button>
        </form>
    </div>
</aside>
