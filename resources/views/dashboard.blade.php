<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- <x-slot name="button">
        <button class="rounded px-2 py-1 bg-blue-500 text-white">Create</button>
    </x-slot> --}}

    <div class="py-4">
        <div class=" sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <x-slot name="script">
    </x-slot>
</x-app-layout>
