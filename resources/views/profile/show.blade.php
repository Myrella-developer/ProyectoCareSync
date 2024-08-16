<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile: ' . $user->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Profile Card -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <div class="flex flex-col items-center">
                    <!-- Profile Photo -->
                    <div class="mb-6">
                        @if($user->profile_photo)
                            <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="{{ $user->name }}" class="w-32 h-32 rounded-full object-cover border-4 border-gray-200 dark:border-gray-700">
                        @else
                            <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile" class="w-32 h-32 rounded-full object-cover border-4 border-gray-200 dark:border-gray-700">
                        @endif
                    </div>

                    <!-- User Details -->
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100">{{ $user->name }}</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-300">{{ $user->email }}</p>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">{{ $user->biography }}</p>
                        <p class="mt-2 text-gray-500 dark:text-gray-400">Age: {{ $user->age }}</p>
                    </div>

                    <!-- Edit Profile Button -->
                    <div class="mt-6">
                        <a href="{{ route('profile.edit') }}" class="inline-block px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
