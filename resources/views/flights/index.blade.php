<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Flight Planner') }}
        </h2>
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('flights.create') }}" class="rounded px-2 py-1 bg-blue-500 text-white">Create</a>
    </x-slot>
    <div class=" sm:px-6 lg:px-8">
        {{-- Filter Section --}}
        <div class="mb-4 md:col-span-2 md:mt-0 bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            <form action="#" method="POST" id="filterForm">
                <div class="grid grid-cols-5 gap-3">
                    <div class="col-span-5 sm:col-span-1 flex items-center">
                        <label for="requestDate" class="block text-sm font-medium text-gray-700 mr-2">Request
                            Date</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="requestDate" id="requestDate"
                                class="block w-full flex-1 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="col-span-5 sm:col-span-1 flex items-center">
                        <label for="deptime" class="block text-sm font-medium text-gray-700 mr-2">Departure
                            Time</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="deptime" id="deptime"
                                class="block w-full flex-1 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="col-span-5 sm:col-span-1 flex items-center">
                        <label for="arrtime" class="block text-sm font-medium text-gray-700 mr-2">Arrival Time</label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="arrtime" id="arrtime"
                                class="block w-full flex-1 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-9 gap-3 mt-1">
                    <div class="col-span-9 sm:col-span-1 flex items-center">
                        <label for="origin" class="block text-sm font-medium text-gray-700 mr-2">Origin</label>
                        <select id="origin" name="origin"
                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                            <option value="MIM">MIM</option>
                            <option value="NAS">NAS</option>
                        </select>
                    </div>
                    <div class="col-span-9 sm:col-span-1 flex items-center">
                        <label for="deperture" class="block text-sm font-medium text-gray-700 mr-2">Departure</label>
                        <select id="deperture" name="deperture"
                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                            <option value="MIM">MIM</option>
                            <option value="NAS">NAS</option>
                        </select>
                    </div>
                    <div class="col-span-9 sm:col-span-1 flex items-center">
                        <label for="change" class="block text-sm font-medium text-gray-700 mr-2">Change</label>
                        <select id="change" name="change"
                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-blue-500 sm:text-sm">
                            <option value="N">No</option>
                            <option value="Y">Yes</option>
                        </select>
                    </div>
                    <div class="col-span-9 sm:col-span-1 flex items-center">
                        <label for="connect" class="block text-sm font-medium text-gray-700 mr-2">Connect</label>
                        <input type="number" name="connect" id="connect" value="0"
                            class="block w-full flex-1 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    </div>
                </div>
            </form>
        </div>

        {{-- Table --}}
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-white border-b border-gray-200">
                <table id="flighttable" class="display text-center text-xs">
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
                </table>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('js/vacancy.js') }}"></script>
        <script>
            // Filtering
            $('#requestDate').daterangepicker();
            $('#deptime').daterangepicker({
                "timePicker": true,
                "startDate": "10/16/2022",
                "endDate": "10/22/2022"
            }, function(start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format(
                    'YYYY-MM-DD') + ' (predefined range: ' + label + ')');
            });
            $('#arrtime').daterangepicker({
                "timePicker": true,
                "startDate": "10/16/2022",
                "endDate": "10/22/2022"
            }, function(start, end, label) {
                console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format(
                    'YYYY-MM-DD') + ' (predefined range: ' + label + ')');
            });





            var vacancylist = null;
            vacancylist = $('#flighttable').DataTable({
                processing: true,
                serverSide: true,
                info: false,
                ajax: '{!! route('flights.index') !!}',
                columns: [{
                        data: 'requestDate',
                        name: 'requestDate'
                    },
                    {
                        data: 'leg',
                        name: 'leg'
                    },
                    {
                        data: 'flightNo',
                        name: 'flightNo'
                    },
                    {
                        data: 'origin',
                        name: 'origin'
                    },
                    {
                        data: 'deperture',
                        name: 'deperture'
                    },
                    {
                        data: 'deptime',
                        name: 'deptime'
                    },
                    {
                        data: 'arrtime',
                        name: 'arrtime'
                    },
                    {
                        data: 'ftime',
                        name: 'ftime'
                    },
                    {
                        data: 'equipment',
                        name: 'equipment'
                    },
                    {
                        data: 'change',
                        name: 'change'
                    },
                    {
                        data: 'connect',
                        name: 'connect'
                    },
                    {
                        data: null,
                        render: function(data) {
                            return `<div class="flex"><a href="${BASE_URL}flights/${data.id}/edit?id=${data.id}" class="bg-green-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-green-700" ><span class="iconify" data-icon="dashicons:edit"></span></a>
                                <button type="button"  class="bg-red-600 rounded-md text-white py-2 px-2 mx-1 hover:bg-red-700" onclick="flightPlanDelete(${data.id});"><span class="iconify" data-icon="bi:trash-fill"></span></button></div>`;
                        }
                    }
                ]
            });



            function flightPlanDelete(mediaID) {
                Swal.fire({
                    title: "Delete ?",
                    text: "Are you sure to delete this Plan ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Delete",
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            method: 'DELETE',
                            url: BASE_URL + 'flights/' + mediaID + '?id=' + mediaID,
                            success: function(response) {
                                if (response.status == "success") {
                                    Swal.fire('Success!', response.message, 'success');
                                    vacancylist.draw();
                                } else if (response.status == "error") {
                                    Swal.fire('This item is not deletable!', response.message, 'error');
                                    vacancylist.draw();
                                }
                            }
                        });
                    }
                });
            }
        </script>
    </x-slot>
</x-app-layout>
