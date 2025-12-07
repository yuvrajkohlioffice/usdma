<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200">
            Create Incident
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 shadow-xl rounded-lg p-6 border border-gray-200 dark:border-gray-700">

                <h3 class="text-lg font-bold mb-4 bg-gradient-to-r from-blue-500 to-purple-500 text-white px-3 py-2 rounded-md inline-block">
                    Incident Details
                </h3>

                <form action="{{ route('admin.incidents.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        {{-- INCIDENT NAME --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Incident Name</label>
                            <input type="text" name="incident_name" class="w-full rounded-md" required>
                        </div>

                        {{-- INCIDENT TYPE --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Incident Type</label>
                            <select name="incident_type_id" class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-200">
                                <option value="">Select Incident Type</option>
                                @foreach($incidentTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- LOCATION DETAILS --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Location Details</label>
                            <input type="text" name="location_details" class="w-full rounded-md">
                        </div>

                        {{-- STATE --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">State</label>
                            <input type="text" name="state" class="w-full rounded-md" required>
                        </div>

                        {{-- DISTRICT --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">District</label>
                            <input type="text" name="district" class="w-full rounded-md" required>
                        </div>

                        {{-- VILLAGE --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Village</label>
                            <input type="text" name="village" class="w-full rounded-md">
                        </div>

                        {{-- LAT --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Latitude</label>
                            <input type="text" name="latitude" class="w-full rounded-md">
                        </div>

                        {{-- LNG --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Longitude</label>
                            <input type="text" name="longitude" class="w-full rounded-md">
                        </div>

                        {{-- INCIDENT DATE --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Incident Date</label>
                            <input type="date" name="incident_date" class="w-full rounded-md" required>
                        </div>

                        {{-- INCIDENT TIME --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Incident Time</label>
                            <input type="time" name="incident_time" class="w-full rounded-md" required>
                        </div>

                        {{-- BIG ANIMAL --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Big Animals Died</label>
                            <input type="number" name="big_animals_died" class="w-full rounded-md">
                        </div>

                        {{-- SMALL ANIMAL --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Small Animals Died</label>
                            <input type="number" name="small_animals_died" class="w-full rounded-md">
                        </div>

                        {{-- HOUSE DAMAGE --}}
                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Partially House Damaged</label>
                            <input type="number" name="partially_house" class="w-full rounded-md">
                        </div>

                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Severely House Damaged</label>
                            <input type="number" name="severely_house" class="w-full rounded-md">
                        </div>

                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Fully House Damaged</label>
                            <input type="number" name="fully_house" class="w-full rounded-md">
                        </div>

                        <div>
                            <label class="block mb-1 font-semibold dark:text-gray-200">Cowshed House Damaged</label>
                            <input type="number" name="cowshed_house" class="w-full rounded-md">
                        </div>

                        {{-- FILE UPLOAD --}}
                        <div class="col-span-1 md:col-span-2">
                            <label class="block mb-1 font-semibold dark:text-gray-200">Upload File (Optional)</label>
                            <input type="file" name="file" class="w-full rounded-md border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-200">
                        </div>

                    </div>

                    <div class="mt-6 text-right">
                        <button type="submit"
                                class="px-6 py-2 bg-blue-600 text-white rounded-md shadow hover:bg-blue-700">
                            Save Incident
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-app-layout>
