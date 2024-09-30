<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Workouts') }}
        </h2>
        <a href="{{ route('admin.workouts.create') }}" class="text-sm text-blue-500 hover:text-blue-700 dark:text-blue-300">
            {{ __('Create New Workout') }}
        </a>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($workouts as $workout)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-col">
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
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">{{ $workout->name }}</h3>
                        <p class="text-gray-600 dark:text-gray-300 mb-2 max-h-24 overflow-hidden">{{ $workout->description }}</p>
                        <p class="text-gray-500 dark:text-gray-400">{{ $workout->durationTime }} minutes</p>
                        <div class="flex justify-end space-x-4 mt-4">
                            <a href="{{ route('admin.workouts.edit', $workout->id) }}" class="text-blue-600 hover:text-blue-900 dark:text-blue-300">Edit</a>
                            <form action="{{ route('admin.workouts.destroy', $workout->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure you want to delete this workout?');" class="text-red-600 hover:text-red-900 dark:text-red-300">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


</x-app-layout>
