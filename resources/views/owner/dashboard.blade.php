<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Owner Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium">{{ __('Welcome, Owner!') }}</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('This is your dashboard where you can manage your KOS properties.') }}
                    </p>
                </div>
            </div>

            {{-- Grid for Feature Cards --}}
            <div class="mt-8 grid grid-cols-1 sm:grid-col-2 md:grid-col-3 gap-6">
                {{-- Card 1 --}}
                <a href="#"
                    class="group block p-6 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-xl shadow-lg transition-all duration-200 ease-in-out transform hover:-translate-y-1">
                    <div class="flex flex-col items-center text-center">
                        {{-- Placeholder Icon 1 (Ganti dengan SVG/gambar Anda) --}}
                        <div
                            class="p-3 rounded-full bg-indigo-100 dark:bg-indigo-900 text-indigo-600 dark:text-indigo-300 group-hover:bg-indigo-200 dark:group-hover:bg-indigo-700 transition-colors">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path>
                            </svg>
                        </div>
                        <h4
                            class="mt-4 text-xl font-semibold text-gray-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                            Kelola Properti</h4>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Lihat, tambah, atau edit properti kos
                            Anda.</p>
                    </div>
                </a>

                {{-- Card 2 --}}
                <a href="#"
                    class="group block p-6 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-xl shadow-lg transition-all duration-200 ease-in-out transform hover:-translate-y-1">
                    <div class="flex flex-col items-center text-center">
                        {{-- Placeholder Icon 2 (Ganti dengan SVG/gambar Anda) --}}
                        <div
                            class="p-3 rounded-full bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300 group-hover:bg-green-200 dark:group-hover:bg-green-700 transition-colors">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                        </div>
                        <h4
                            class="mt-4 text-xl font-semibold text-gray-900 dark:text-white group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors">
                            Manajemen Kamar</h4>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Atur ketersediaan dan detail kamar kos.
                        </p>
                    </div>
                </a>

                {{-- Card 3 --}}
                <a href="#"
                    class="group block p-6 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-xl shadow-lg transition-all duration-200 ease-in-out transform hover:-translate-y-1">
                    <div class="flex flex-col items-center text-center">
                        {{-- Placeholder Icon 3 (Ganti dengan SVG/gambar Anda) --}}
                        <div
                            class="p-3 rounded-full bg-yellow-100 dark:bg-yellow-900 text-yellow-600 dark:text-yellow-300 group-hover:bg-yellow-200 dark:group-hover:bg-yellow-700 transition-colors">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H7a3 3 0 00-3 3v4a3 3 0 003 3z">
                                </path>
                            </svg>
                        </div>
                        <h4
                            class="mt-4 text-xl font-semibold text-gray-900 dark:text-white group-hover:text-yellow-600 dark:group-hover:text-yellow-400 transition-colors">
                            Laporan Keuangan</h4>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Lihat riwayat pembayaran dan
                            pendapatan.</p>
                    </div>
                </a>
                {{-- Card untuk Atur Kosan Anda --}}
                {{-- Asumsikan kita mengedit properti dengan ID 1 untuk contoh ini --}}
                {{-- Anda perlu logika untuk mendapatkan ID properti yang benar --}}
                <a href="{{ route('owner.properties.edit', ['property' => 1]) }}"
                    class="group block p-6 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-xl shadow-lg transition-all duration-200 ease-in-out transform hover:-translate-y-1">
                    <div class="flex flex-col items-center text-center">
                        {{-- Placeholder Icon (Ganti dengan SVG/gambar Anda) --}}
                        <div
                            class="p-3 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 group-hover:bg-blue-200 dark:group-hover:bg-blue-700 transition-colors">
                            {{-- Menggunakan ikon yang berbeda untuk membedakan --}}
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <h4
                            class="mt-4 text-xl font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            Atur Properti Anda</h4>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Edit detail dan pengaturan properti kosan.</p>
                    </div>
                </a>

                {{-- Anda bisa menambahkan lebih banyak card di sini --}}

            </div>
        </div>
    </div>
</x-app-layout>
