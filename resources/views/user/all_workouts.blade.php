<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Choose Your Favorite Workouts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Success Alert -->
            @if(session('success'))
                <div class="alert alert-success bg-green-500 text-white p-4 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <!-- No Workouts Available -->
            @if($workouts->isEmpty())
                <p class="text-gray-500 dark:text-gray-300">No workouts available at the moment.</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($workouts as $workout)
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-col h-365px">
                            <div class="flex-shrink-0">
                                @if($workout->image)
                                    <img src="{{ asset('storage/' . $workout->image) }}" alt="{{ $workout->name }}" class="w-full h-48 object-cover rounded-t-md">
                                @else
                                    <div class="w-full h-48 bg-gray-200 dark:bg-gray-700 flex items-center justify-center rounded-t-md">
                                        <span class="text-gray-500 dark:text-gray-300">No Image</span>
                                    </div>
                                @endif
                            </div>
                            <div class="flex-1 p-4 flex flex-col">
                                <div class="flex-1">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $workout->name }}</h3>
                                    <p class="text-gray-600 dark:text-gray-300 mb-2 max-h-24 overflow-hidden">{{ $workout->description }}</p>
                                    <p class="text-gray-500 dark:text-gray-400">{{ $workout->durationTime }} minutes</p>
                                </div>
                                <div class="flex justify-end space-x-4 mt-4">
                                    @if(auth()->user()->favoriteWorkouts->contains($workout->id))
                                        <form action="{{ route('favorites.remove', $workout->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Remove from favorites?');" class="text-red-600 hover:text-red-900 dark:text-red-300">
                                                Remove from Favorites
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('favorites.add', $workout->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-green-600 hover:text-green-900 dark:text-green-300">
                                                Add to Favorites
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
