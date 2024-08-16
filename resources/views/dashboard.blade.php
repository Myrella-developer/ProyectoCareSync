<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Wellness Hub') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Profile Section -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg mb-8 p-6">
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

            <!-- Favorite Workouts Section -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 mb-6">
                    {{ __('Your Favorite Workouts') }}
                </h2>

                <!-- No Favorite Workouts Available -->
                @if($favoriteWorkouts->isEmpty())
                    <p class="text-gray-500 dark:text-gray-300">You have no favorite workouts yet.</p>
                @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($favoriteWorkouts as $workout)
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-4">
                                    @if($workout->image)
                                        <img src="{{ asset('storage/' . $workout->image) }}" alt="{{ $workout->name }}" class="w-full h-48 object-cover rounded-t-md mb-4">
                                    @else
                                        <div class="w-full h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center rounded-t-md mb-4">
                                            <span class="text-gray-500 dark:text-gray-300">No Image</span>
                                        </div>
                                    @endif
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $workout->name }}</h3>
                                    <p class="text-gray-600 dark:text-gray-300 mb-4">{{ $workout->description }}</p>
                                    <p class="text-gray-500 dark:text-gray-400 mb-4">{{ $workout->durationTime }} minutes</p>
                                    <div class="flex justify-end">
                                        <form action="{{ route('favorites.remove', $workout->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Remove from favorites?');" class="text-red-600 hover:text-red-900 dark:text-red-300">
                                                Remove from Favorites
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
