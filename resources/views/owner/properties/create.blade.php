<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Your First Property') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 md:p-8 text-gray-900 dark:text-gray-100">
                    @if(session('warning'))
                        <div class="mb-4 p-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
                            {{ session('warning') }}
                        </div>
                    @endif

                    <h3 class="text-lg font-medium">{{ __('Welcome, Owner!') }}</h3>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 mb-6">
                        {{ __('To get started, please add details about your first kosan (property), including its location.') }}
                    </p>

                    <form method="POST" action="{{ route('owner.properties.store') }}">
                        @csrf

                        <div class="mt-6 mb-8 border-b border-gray-300 dark:border-gray-700 pb-6">
                            <h4 class="text-md font-semibold text-gray-700 dark:text-gray-300 mb-4">{{ __('Basic Property Information') }}</h4>
                            <!-- Property Name -->
                            <div class="mt-4">
                                <x-input-label for="name" :value="__('Property Name (e.g., Kosan Melati)')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Property Type -->
                            <div class="mt-4">
                                <x-input-label for="type" :value="__('Property Type')" />
                                <select name="type" id="type" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="putra">{{ __('Putra (Male Only)') }}</option>
                                    <option value="putri">{{ __('Putri (Female Only)') }}</option>
                                    <option value="campuran">{{ __('Campuran (Mixed)') }}</option>
                                    <option value="keluarga">{{ __('Keluarga (Family)') }}</option>
                                </select>
                                <x-input-error :messages="$errors->get('type')" class="mt-2" />
                            </div>

                            <!-- Alamat -->
                            <div class="mt-4">
                                <x-input-label for="address" :value="__('Alamat')" />
                                <textarea id="address" name="address" class="block mt-1 w-full tinymce-editor">{{ old('address') }}</textarea>
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                            <!-- Description -->
                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />
                                <textarea id="description" name="description" class="block mt-1 w-full tinymce-editor">{{ old('description') }}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>

                             <!-- Price -->
                            <div class="mt-4">
                                <x-input-label for="price" :value="__('Price (e.g., monthly rate)')" />
                                <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required />
                                <x-input-error :messages="$errors->get('price')" class="mt-2" />
                            </div>
                        </div>

                  

                        <div class="flex items-center justify-end mt-6">
                            <x-primary-button>
                                {{ __('Save Property') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="https://cdn.tiny.cloud/1/YOUR_API_KEY/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#description', // Target the textarea by its ID
            plugins: 'code table lists image link',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | link image',
            height: 300,
            // Tambahan konfigurasi jika diperlukan
            // Misalnya, untuk mengizinkan tag tertentu atau mengatur skin
            // skin: (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'oxide-dark' : 'oxide'),
            // content_css: (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'default')
        });
    </script>
    @endpush
</x-app-layout> 