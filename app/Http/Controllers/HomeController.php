<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Support\Facades\Storage;
use App\Models\FavoriteWorkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Obtiene el usuario autenticado
        $favoriteWorkouts = $user->favoriteWorkouts; // Suponiendo que la relación está bien definida

        return view('dashboard', compact('user', 'favoriteWorkouts'));
    }


    public function workoutsIndex()
    {
        $workouts = Workout::all();
        return view('admin.workouts.index', compact('workouts'));
    }

    public function workoutsCreate()
    {
        return view('admin.workouts.create');
    }

    public function workoutsStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'durationTime' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validação da imagem
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('workouts', 'public'); // salva a imagem na pasta 'workouts' dentro de 'public/storage'
        }

        Workout::create([
            'name' => $request->name,
            'description' => $request->description,
            'durationTime' => $request->durationTime,
            'image' => $imagePath, // salva o caminho da imagem
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('admin.workouts.index')->with('success', 'Workout created successfully.');
    }

    public function workoutsEdit(Workout $workout)
    {
        return view('admin.workouts.edit', compact('workout'));
    }

    public function workoutsUpdate(Request $request, Workout $workout)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'durationTime' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->only(['name', 'description', 'durationTime']);

    // Handle image update
    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($workout->image) {
            Storage::disk('public')->delete($workout->image);
        }

        // Store the new image
        $data['image'] = $request->file('image')->store('workouts', 'public');
    }

    $workout->update($data);

    return redirect()->route('admin.workouts.index')->with('success', 'Workout updated successfully.');
}

    public function workoutsDestroy(Workout $workout)
    {
        $workout->delete();

        return redirect()->route('admin.workouts.index')->with('success', 'Workout deleted successfully.');
    }

    public function showAllWorkouts()
    {
        $workouts = Workout::all();
        return view('user.all_workouts', compact('workouts'));
    }

    public function addFavorite(Request $request, $workoutId)
{
    $user = Auth::user(); // Obtiene el usuario autenticado

    if (!$user) {
        return redirect()->route('workouts.all')->with('error', 'You must be logged in to add favorites.');
    }

    // Verifica si el favorito ya existe para evitar duplicados
    if (!FavoriteWorkout::where('user_id', $user->id)->where('workout_id', $workoutId)->exists()) {
        FavoriteWorkout::create([
            'user_id' => $user->id,
            'workout_id' => $workoutId,
        ]);
    }

    return redirect()->route('workouts.all')->with('success', 'Workout added to favorites.');
    }

    public function showFavorite()
    {
        $user = Auth::user();
        $favoriteWorkouts = $user->favoriteWorkouts;

        return view('user.favorite_workouts', compact('favoriteWorkouts'));
    }

    public function removeFavorite(Request $request, $workoutId)
{
    $user = Auth::user(); // Obtiene el usuario autenticado

    if (!$user) {
        return redirect()->route('workouts.all')->with('error', 'You must be logged in to remove favorites.');
    }

    // Eliminar el registro en la tabla favorite_workouts
    FavoriteWorkout::where('user_id', $user->id)->where('workout_id', $workoutId)->delete();

    return redirect()->route('workouts.all')->with('success', 'Workout removed from favorites.');
}

}
