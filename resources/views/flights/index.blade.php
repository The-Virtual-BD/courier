<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Flight Planner') }}
        </h2>
    </x-slot>
    <x-slot name="button">
        <a href="{{route('flights.create')}}" class="rounded px-2 py-1 bg-blue-500 text-white">Create</a>
    </x-slot>
    <div class=" sm:px-6 lg:px-8">
        <div class="mb-4 md:col-span-2 md:mt-0 bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            <form action="#" method="POST">
                <div class="grid grid-cols-5 gap-3">
                    <div class="col-span-5 sm:col-span-1 flex items-center">
                        <label for="company-website" class="block text-sm font-medium text-gray-700 mr-2">Request Date</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="company-website" id="company-website"
                                class="block w-full flex-1 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="col-span-5 sm:col-span-1 flex items-center">
                        <label for="company-website" class="block text-sm font-medium text-gray-700 mr-2">Departure Time</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="company-website" id="company-website"
                                class="block w-full flex-1 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="col-span-5 sm:col-span-1 flex items-center">
                        <label for="company-website" class="block text-sm font-medium text-gray-700 mr-2">Arrival Time</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="company-website" id="company-website"
                                class="block w-full flex-1 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-9 gap-3 mt-1">
                    <div class="col-span-9 sm:col-span-1 flex items-center">
                        <label for="country" class="block text-sm font-medium text-gray-700 mr-2">Origin</label>
                        <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                            <option>MIM</option>
                            <option>Nas</option>
                        </select>
                    </div>
                    <div class="col-span-9 sm:col-span-1 flex items-center">
                        <label for="country" class="block text-sm font-medium text-gray-700 mr-2">Departure</label>
                        <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                            <option>MIM</option>
                            <option>Nas</option>
                        </select>
                    </div>
                    <div class="col-span-9 sm:col-span-1 flex items-center">
                        <label for="country" class="block text-sm font-medium text-gray-700 mr-2">Change</label>
                        <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-span-9 sm:col-span-1 flex items-center">
                        <label for="connect" class="block text-sm font-medium text-gray-700 mr-2">Connect</label>
                        <input type="number" name="company-website" id="company-website"
                                class="block w-full flex-1 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    </div>
                </div>
            </form>
        </div>

        {{-- Table --}}
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-white border-b border-gray-200">
                <table id="fptable" class="display text-center text-xs">
                    <thead>
                        <tr class="uppercase">
                            <th>Request Date</th>
                            <th>LEG</th>
                            <th>Flight No</th>
                            <th>Origin</th>
                            <th>Departure</th>
                            <th>Departure, LT</th>
                            <th>Arrival, LT</th>
                            <th>Flight Time</th>
                            <th>Equipment</th>
                            <th>Change</th>
                            <th>Connect</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>16.06.2022</td>
                            <td>1</td>
                            <td>EK405</td>
                            <td>MIM</td>
                            <td>NAS</td>
                            <td>17.06.2022 18:00</td>
                            <td>17.06.2022 22:00</td>
                            <td>04:00</td>
                            <td>77W</td>
                            <td>N</td>
                            <td>0</td>
                            <td class="flex">

                                <a href="" target="_blank"
                                    class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                        class="iconify" data-icon="carbon:view-filled"></span></a>
                                <a href=""
                                    class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                        class="iconify" data-icon="dashicons:edit"></span></a>
                                <button type="button"
                                    class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                        class="iconify" data-icon="bi:trash-fill"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>16.06.2022</td>
                            <td>1</td>
                            <td>EK405</td>
                            <td>MIM</td>
                            <td>NAS</td>
                            <td>17.06.2022 18:00</td>
                            <td>17.06.2022 22:00</td>
                            <td>04:00</td>
                            <td>77W</td>
                            <td>N</td>
                            <td>0</td>
                            <td class="flex">

                                <a href="" target="_blank"
                                    class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                        class="iconify" data-icon="carbon:view-filled"></span></a>
                                <a href=""
                                    class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                        class="iconify" data-icon="dashicons:edit"></span></a>
                                <button type="button"
                                    class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                        class="iconify" data-icon="bi:trash-fill"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>16.06.2022</td>
                            <td>1</td>
                            <td>EK405</td>
                            <td>MIM</td>
                            <td>NAS</td>
                            <td>17.06.2022 18:00</td>
                            <td>17.06.2022 22:00</td>
                            <td>04:00</td>
                            <td>77W</td>
                            <td>N</td>
                            <td>0</td>
                            <td class="flex">

                                <a href="" target="_blank"
                                    class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                        class="iconify" data-icon="carbon:view-filled"></span></a>
                                <a href=""
                                    class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                        class="iconify" data-icon="dashicons:edit"></span></a>
                                <button type="button"
                                    class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                        class="iconify" data-icon="bi:trash-fill"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>16.06.2022</td>
                            <td>1</td>
                            <td>EK405</td>
                            <td>MIM</td>
                            <td>NAS</td>
                            <td>17.06.2022 18:00</td>
                            <td>17.06.2022 22:00</td>
                            <td>04:00</td>
                            <td>77W</td>
                            <td>Y</td>
                            <td>0</td>
                            <td class="flex">

                                <a href="" target="_blank"
                                    class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                        class="iconify" data-icon="carbon:view-filled"></span></a>
                                <a href=""
                                    class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                        class="iconify" data-icon="dashicons:edit"></span></a>
                                <button type="button"
                                    class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                        class="iconify" data-icon="bi:trash-fill"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>16.06.2022</td>
                            <td>1</td>
                            <td>EK405</td>
                            <td>MIM</td>
                            <td>NAS</td>
                            <td>17.06.2022 18:00</td>
                            <td>17.06.2022 22:00</td>
                            <td>04:00</td>
                            <td>77W</td>
                            <td>Y</td>
                            <td>0</td>
                            <td class="flex">

                                <a href="" target="_blank"
                                    class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                        class="iconify" data-icon="carbon:view-filled"></span></a>
                                <a href=""
                                    class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                        class="iconify" data-icon="dashicons:edit"></span></a>
                                <button type="button"
                                    class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                        class="iconify" data-icon="bi:trash-fill"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>16.06.2022</td>
                            <td>1</td>
                            <td>EK405</td>
                            <td>MIM</td>
                            <td>NAS</td>
                            <td>17.06.2022 18:00</td>
                            <td>17.06.2022 22:00</td>
                            <td>04:00</td>
                            <td>77W</td>
                            <td>Y</td>
                            <td>0</td>
                            <td class="flex">

                                <a href="" target="_blank"
                                    class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                        class="iconify" data-icon="carbon:view-filled"></span></a>
                                <a href=""
                                    class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                        class="iconify" data-icon="dashicons:edit"></span></a>
                                <button type="button"
                                    class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                        class="iconify" data-icon="bi:trash-fill"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>16.06.2022</td>
                            <td>2</td>
                            <td>EK405</td>
                            <td>MIM</td>
                            <td>NAS</td>
                            <td>17.06.2022 18:00</td>
                            <td>17.06.2022 22:00</td>
                            <td>04:00</td>
                            <td>77W</td>
                            <td>Y</td>
                            <td>1</td>
                            <td class="flex">
                                <a href="" target="_blank"
                                    class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                        class="iconify" data-icon="carbon:view-filled"></span></a>
                                <a href=""
                                    class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                        class="iconify" data-icon="dashicons:edit"></span></a>
                                <button type="button"
                                    class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                        class="iconify" data-icon="bi:trash-fill"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>16.06.2022</td>
                            <td>2</td>
                            <td>EK405</td>
                            <td>MIM</td>
                            <td>NAS</td>
                            <td>17.06.2022 18:00</td>
                            <td>17.06.2022 22:00</td>
                            <td>04:00</td>
                            <td>77W</td>
                            <td>N</td>
                            <td>1</td>
                            <td class="flex">
                                <a href="" target="_blank"
                                    class="bg-blue-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-blue-700"><span
                                        class="iconify" data-icon="carbon:view-filled"></span></a>
                                <a href=""
                                    class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700"><span
                                        class="iconify" data-icon="dashicons:edit"></span></a>
                                <button type="button"
                                    class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700"><span
                                        class="iconify" data-icon="bi:trash-fill"></span></button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('js/vacancy.js') }}"></script>
        <script>
            $('#fptable').DataTable(
                {
                    info: false,
                }
            );
        </script>
    </x-slot>
</x-app-layout>
