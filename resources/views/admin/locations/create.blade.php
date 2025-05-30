<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Location') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('admin.locations.store') }}">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-input-label for="province" :value="__('Province')" />
                                <x-text-input id="province" class="block mt-1 w-full" type="text" name="province" :value="old('province')" required autofocus />
                                <x-input-error :messages="$errors->get('province')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="regency" :value="__('Regency/City')" />
                                <x-text-input id="regency" class="block mt-1 w-full" type="text" name="regency" :value="old('regency')" required />
                                <x-input-error :messages="$errors->get('regency')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="district" :value="__('District')" />
                                <x-text-input id="district" class="block mt-1 w-full" type="text" name="district" :value="old('district')" required />
                                <x-input-error :messages="$errors->get('district')" class="mt-2" />
                            </div>

                            <div>
                                <x-input-label for="village" :value="__('Village/Kelurahan')" />
                                <x-text-input id="village" class="block mt-1 w-full" type="text" name="village" :value="old('village')" required />
                                <x-input-error :messages="$errors->get('village')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mt-6">
                            <x-input-label for="address_line" :value="__('Full Address Line (Street, Number, etc.)')" />
                            <textarea id="address_line" name="address_line" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" rows="3">{{ old('address_line') }}</textarea>
                            <x-input-error :messages="$errors->get('address_line')" class="mt-2" />
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                            <div>
                                <x-input-label for="postal_code" :value="__('Postal Code')" />
                                <x-text-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" />
                                <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="latitude" :value="__('Latitude')" />
                                <x-text-input id="latitude" class="block mt-1 w-full" type="text" name="latitude" :value="old('latitude')" />
                                <x-input-error :messages="$errors->get('latitude')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="longitude" :value="__('Longitude')" />
                                <x-text-input id="longitude" class="block mt-1 w-full" type="text" name="longitude" :value="old('longitude')" />
                                <x-input-error :messages="$errors->get('longitude')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-8">
                            <a href="{{ route('admin.locations.index') }}" class="text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white mr-4">
                                {{ __('Cancel') }}
                            </a>
                            <x-primary-button>
                                {{ __('Save Location') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 