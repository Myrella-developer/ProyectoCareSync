<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Wellness Hub') }}
        </h2>
    </x-slot>

    <div class="py-6">
    <div class="max-w-4xl mx-auto sm:px-4 lg:px-6">

        <!-- Profile Section -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md mb-6 p-4 max-w-md mx-auto">
            <div class="flex flex-col items-center">
                <!-- Profile Photo -->
                <div class="mb-4 relative">
                    @if($user->profile_photo)
                        <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="{{ $user->name }}" class="w-24 h-24 rounded-full object-cover border-4 border-gray-200 dark:border-gray-700 shadow-md hover:border-blue-500 transition-all duration-300">
                    @else
                        <div class="w-24 h-24 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center shadow-md">
                            <span class="text-3xl text-gray-500 dark:text-gray-400 font-bold">{{ substr($user->name, 0, 1) }}</span>
                        </div>
                    @endif
                    <!-- Badge for Online Status (Optional) -->
                    <span class="absolute bottom-1 right-1 w-3 h-3 bg-green-500 rounded-full border-2 border-white dark:border-gray-800"></span>
                </div>

                <!-- User Details -->
                <div class="text-center">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $user->name }}</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-300 mb-2">{{ $user->email }}</p>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-3">{{ $user->biography }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-300">Age: {{ $user->age }}</p>
                </div>
            </div>
        </div>

        <!-- Divider Line -->
        <div class="border-t-2 border-gray-200 dark:border-gray-700 mt-6 mb-6"></div>

        <!-- Favorite Workouts Section -->
        <h2 class="font-semibold text-lg text-gray-800 dark:text-gray-200 mb-4 mt-6">
            {{ __('Your Favorite Workouts') }}
        </h2>
        <!-- No Favorite Workouts Available -->
        @if($favoriteWorkouts->isEmpty())
            <p class="text-gray-500 dark:text-gray-300">You have no favorite workouts yet.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                @foreach($favoriteWorkouts as $workout)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg mb-3">
                        <div class="p-3">
                            @if($workout->image)
                                <img src="{{ asset('storage/' . $workout->image) }}" alt="{{ $workout->name }}" class="w-full h-40 object-cover rounded-t-md mb-3">
                            @else
                                <div class="w-full h-40 bg-gray-200 dark:bg-gray-700 flex items-center justify-center rounded-t-md mb-3">
                                    <span class="text-gray-500 dark:text-gray-300">No Image</span>
                                </div>
                            @endif
                            <h3 class="text-md font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $workout->name }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-300 mb-3">{{ $workout->description }}</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">{{ $workout->durationTime }} minutes</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>

</x-app-layout>
