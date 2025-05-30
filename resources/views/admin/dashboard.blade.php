<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium">{{ __("Welcome, Admin!") }}</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ __("This is the central control panel for managing the application.") }}
                    </p>
                </div>
            </div>

            {{-- Grid for Feature Cards --}}
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                {{-- Card 1: User Management --}}
                <a href="#" class="group block p-6 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-xl shadow-lg transition-all duration-200 ease-in-out transform hover:-translate-y-1">
                    <div class="flex flex-col items-center text-center">
                        <div class="p-3 rounded-full bg-sky-100 dark:bg-sky-900 text-sky-600 dark:text-sky-300 group-hover:bg-sky-200 dark:group-hover:bg-sky-700 transition-colors">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </div>
                        <h4 class="mt-4 text-xl font-semibold text-gray-900 dark:text-white group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">Manajemen Pengguna</h4>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Lihat, edit, atau hapus akun pengguna.</p>
                    </div>
                </a>

                {{-- Card 2: Content Management --}}
                <a href="#" class="group block p-6 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-xl shadow-lg transition-all duration-200 ease-in-out transform hover:-translate-y-1">
                    <div class="flex flex-col items-center text-center">
                        <div class="p-3 rounded-full bg-lime-100 dark:bg-lime-900 text-lime-600 dark:text-lime-300 group-hover:bg-lime-200 dark:group-hover:bg-lime-700 transition-colors">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h4 class="mt-4 text-xl font-semibold text-gray-900 dark:text-white group-hover:text-lime-600 dark:group-hover:text-lime-400 transition-colors">Manajemen Konten</h4>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Kelola properti kos, artikel, atau data lainnya.</p>
                    </div>
                </a>

                {{-- Card 3: Settings --}}
                <a href="#" class="group block p-6 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-xl shadow-lg transition-all duration-200 ease-in-out transform hover:-translate-y-1">
                    <div class="flex flex-col items-center text-center">
                        <div class="p-3 rounded-full bg-rose-100 dark:bg-rose-900 text-rose-600 dark:text-rose-300 group-hover:bg-rose-200 dark:group-hover:bg-rose-700 transition-colors">
                            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0 3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <h4 class="mt-4 text-xl font-semibold text-gray-900 dark:text-white group-hover:text-rose-600 dark:group-hover:text-rose-400 transition-colors">Pengaturan Aplikasi</h4>
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Konfigurasi umum dan preferensi sistem.</p>
                    </div>
                </a>

            </div>
        </div>
    </div>
</x-app-layout> 