<nav class="bg-blue-500">
    <div class="h-20  md:relative md:h-screen z-10 w-full md:w-44 content-center">

        <div
            class=" md:mt-[4rem] md:w-44 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col pt-3 md:py-3 text-center md:text-left">
                <li class="{{ request()->is('/') ? 'bg-gray-100 text-gray-900 hover:text-blue-500' : 'text-white hover:text-gray-900' }}">
                    <a href="{{ route('dashboard') }}"
                        class="px-1 md:px-2 flex-1 flex items-center py-1 pl-1 align-middle no-underline  ">
                        <span class="iconify mr-4" data-icon="ci:home-alt-fill"></span><span
                            class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->is('flights*') ? 'bg-gray-100 text-gray-900 hover:text-blue-500' : 'text-white'}}">
                    <a href="{{route('flights.index')}}" class="px-1 md:px-2 flex-1 flex items-center py-1 pl-1 align-middle text-blue no-underline {{ request()->is('flights*') ? 'bg-white text-gray-900 hover:text-blue-500' : 'text-white hover:text-gray-900'}}">
                        <span class="iconify mr-4" data-icon="ic:sharp-flight"></span><span
                            class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Flight
                            Planner</span>
                    </a>
                    <ul class="ml-10 {{ request()->is('flights*') ? '' : 'hidden'}}">
                        <li>
                            <a href="{{ route('flights.index') }}"
                                class="px-1 md:px-2 flex-1 flex items-center py-1 pl-1 align-middle text-gray-900 no-underline hover:bg-gray-100 hover:text-blue-500 {{ request()->is('flights') ? 'bg-gray-100' : '' }}">
                                <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Flight
                                    Planner</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('flights.create') }}"
                                class="px-1 md:px-2 flex-1 flex items-center py-1 pl-1 align-middle text-gray-900 no-underline hover:bg-gray-100 hover:text-blue-500 {{ request()->is('flights/create') ? 'bg-gray-100' : '' }}">
                                <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Quick
                                    Create</span>
                            </a>
                        </li>
                        <li><a href=""
                                class="px-1 md:px-2 flex-1 flex items-center py-1 pl-1 align-middle text-gray-900 no-underline hover:bg-gray-100 hover:text-blue-500">
                                <span class="pb-1 md:pb-0 text-xs md:text-base block md:inline-block">Cargo</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="p-4 fixed w-44 bottom-0 left-0 bg-violet-800">
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="">
                    <div
                        class="flex items-center text-sm font-medium text-white hover:text-gray-400 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>{{ Auth::user()->name }}</div>
                    </div>
                    <div class="flex">

                        <x-dropdown-link :href="route('profile')"><span class="iconify" data-icon="gg:profile"></span>
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                <span class="iconify" data-icon="ri:logout-circle-line"></span>
                            </x-dropdown-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
