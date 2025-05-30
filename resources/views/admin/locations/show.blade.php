<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Location Details') }}: {{ $location->village }}, {{ $location->district }}
            </h2>
            <a href="{{ route('admin.locations.index') }}" class="text-sm text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                &larr; {{ __('Back to Locations List') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100 space-y-4">
                    <div>
                        <h3 class="text-lg font-medium">{{ __('Location Information') }}</h3>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">
                        <div>
                            <span class="font-semibold">{{ __('Province') }}:</span> {{ $location->province }}
                        </div>
                        <div>
                            <span class="font-semibold">{{ __('Regency/City') }}:</span> {{ $location->regency }}
                        </div>
                        <div>
                            <span class="font-semibold">{{ __('District') }}:</span> {{ $location->district }}
                        </div>
                        <div>
                            <span class="font-semibold">{{ __('Village/Kelurahan') }}:</span> {{ $location->village }}
                        </div>
                         <div>
                            <span class="font-semibold">{{ __('Postal Code') }}:</span> {{ $location->postal_code ?? 'N/A' }}
                        </div>
                        <div>
                            <span class="font-semibold">{{ __('Latitude') }}:</span> {{ $location->latitude ?? 'N/A' }}
                        </div>
                        <div>
                            <span class="font-semibold">{{ __('Longitude') }}:</span> {{ $location->longitude ?? 'N/A' }}
                        </div>
                    </div>

                    <div class="mt-2">
                        <span class="font-semibold">{{ __('Full Address Line') }}:</span>
                        <p class="text-gray-700 dark:text-gray-300">{{ $location->address_line ?? 'N/A' }}</p>
                    </div>

                    <div class="mt-6 flex items-center justify-end space-x-3">
                        <a href="{{ route('admin.locations.edit', $location->id) }}" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                            {{ __('Edit Location') }}
                        </a>
                        <form action="{{ route('admin.locations.destroy', $location->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this location? This might affect properties using this location.');">
                            @csrf
                            @method('DELETE')
                            <x-danger-button type="submit">
                                {{ __('Delete Location') }}
                            </x-danger-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 