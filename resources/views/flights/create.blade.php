<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Flight Planner') }}
        </h2>
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('flights.index') }}" class="rounded px-2 py-1 bg-blue-500 text-white">All Plan</a>
    </x-slot>
    <div class=" sm:px-6 lg:px-8">
        <div class="mb-4 md:col-span-2 md:mt-0 bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            <form action="#" method="POST">
                <div class="overflow-hidden sm:rounded-md">
                    <div class="">
                        <div class="grid grid-cols-8 gap-6">
                            <div class="col-span-8">
                                <label for="first-name" class="block text-sm text-gray-700 font-bold">REQUEST
                                    DATE</label>
                                <input type="date" name="first-name" id="first-name" autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>

                            <div class="col-span-8 sm:col-span-2">
                                <label for="" class="block text-sm font-bold text-gray-700">LEG</label>
                                <input type="number" name="" id="" min="1" value="1"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div class="col-span-8 sm:col-span-2">
                                <label for="" class="block text-sm font-bold text-gray-700">FLIGHT
                                    NO.</label>
                                    <select id="country" name="country" autocomplete="country-name"
                                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                                        <option>DFG45</option>
                                        <option>KX54</option>
                                        <option>YI89</option>
                                    </select>
                            </div>
                            <div class="col-span-8 sm:col-span-2">
                                <label for="" class="block text-sm font-bold text-gray-700">ORIGIN</label>
                                <select id="country" name="country" autocomplete="country-name"
                                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                                        <option>MIM</option>
                                        <option>NAS</option>
                                    </select>
                            </div>
                            <div class="col-span-8 sm:col-span-2">
                                <label for="" class="block text-sm font-bold text-gray-700">DEPARTURE</label>
                                <select id="country" name="country" autocomplete="country-name"
                                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                                        <option>MIM</option>
                                        <option>NAS</option>
                                    </select>
                            </div>
                            <div class="col-span-8">
                                <label for="" class="block text-sm font-bold text-gray-700">DEPARTURE,
                                    LT</label>
                                <input type="datetime-local" name="" id=""
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div class="col-span-8">
                                <label for="" class="block text-sm font-bold text-gray-700">ARRIVAL,
                                    LT</label>
                                <input type="datetime-local" name="" id=""
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>
                            <div class="col-span-8 sm:col-span-2">
                                <label for="" class="block text-sm font-bold text-gray-700">FLIGHT
                                    TIME</label>
                                <input type="time" name="" id=""
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                            </div>

                            <div class="col-span-8 sm:col-span-2">
                                <label for="email-address"
                                    class="block text-sm font-bold text-gray-700">EQUIPMENT</label>
                                    <select id="country" name="country" autocomplete="country-name"
                                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                                        <option>77W</option>
                                        <option>75W</option>
                                    </select>
                            </div>

                            <div class="col-span-8 sm:col-span-2">
                                <label for="country" class="block text-sm font-bold text-gray-700">CHANGE</label>
                                <select id="country" name="country" autocomplete="country-name"
                                    class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                                    <option>No</option>
                                    <option>Yes</option>
                                </select>
                            </div>
                            <div class="col-span-8 sm:col-span-2">
                                <label for="email-address"
                                    class="block text-sm font-bold text-gray-700">CONNECT</label>
                                <input type="number" name="email-address" id="email-address" autocomplete="email"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end">

                        <button type="submit"
                            class="my-4 text-right inline-flex justify-center rounded-md border border-transparent bg-blue-500 py-2 px-4 text-sm font-bold text-white shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Save This Plan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <x-slot name="script">
    </x-slot>
</x-app-layout>
