<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl text-purple-800">Bienvenido al gestor de Exercicios</h1>
                    <div>
                        @foreach ($workouts as $workout)
                        <p class="text-2xl text-center">
                            {{ $workout->name }}
                        </p>
                        <p class="text-m">
                            {{ $workout->description }}
                        </p>
                        <hr>
                        <p class="text-m">
                        <b>Time:</b> {{ $workout->durationTime }}'
                        </p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
