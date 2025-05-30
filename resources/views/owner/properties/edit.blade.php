{{-- resources/views/owner/properties/edit.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Properti') }}: {{ $property->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium">{{ __('Form Edit Properti') }}</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Perbarui detail properti Anda di bawah ini.') }}
                    </p>

                    {{-- Menampilkan pesan sukses jika ada --}}
                    @if (session('success'))
                        <div class="mt-4 mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Berhasil!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    {{-- Form untuk mengupdate properti --}}
                    {{-- Pastikan objek $property tersedia dari controller --}}
                    <form method="POST" action="{{ route('owner.properties.update', $property->id) }}"
                        class="mt-6 space-y-6">
                        @csrf
                        @method('PUT') {{-- Metode HTTP untuk update --}}

                        {{-- Nama Properti --}}
                        <div>
                            <x-input-label for="name" :value="__('Nama Properti')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                :value="old('name', $property->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        {{-- Alamat Properti --}}
                        <div>
                            <x-input-label for="address" :value="__('Alamat Properti')" />
                            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full"
                                :value="old('address', $property->address)" required autocomplete="address" />
                            <x-input-error class="mt-2" :messages="$errors->get('address')" />
                        </div>

                        {{-- Deskripsi --}}
                        <div>
                            <x-input-label for="description" :value="__('Deskripsi')" />
                            <textarea id="description" name="description" rows="4"
                                class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">{{ old('description', $property->description) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        {{-- Tambahkan field lain di sini jika ada, misalnya: --}}
                        {{--
                        <div>
                            <x-input-label for="price" :value="__('Harga per Bulan')" />
                            <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" :value="old('price', $property->price)" />
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </div>
                        --}}

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Simpan Perubahan') }}</x-primary-button>

                            <a href="{{ route('owner.dashboard') }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-200 dark:bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-gray-800 dark:text-gray-200 uppercase tracking-widest hover:bg-gray-300 dark:hover:bg-gray-600 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                {{ __('Kembali') }}
                            </a>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('owner.properties.destroy', $property->id) }}"
                        class="mt-6 space-y-6">
                        @csrf
                        @method('DELETE')
                        <x-primary-button>{{ __('Hapus Properti') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
