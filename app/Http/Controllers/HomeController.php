<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
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
        ]);

        Workout::create([
            'name' => $request->name,
            'description' => $request->description,
            'durationTime' => $request->durationTime,
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
        ]);

        $workout->update($request->all());

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
        $user = User::all();
        $user->favoriteWorkouts()->attach($workoutId);

        return redirect()->route('workouts.all')->with('success', 'Workout added to favorites.');
    }

    public function removeFavorite(Request $request, $workoutId)
    {
        $user = $user = User::all();
        $user->favoriteWorkouts()->detach($workoutId);

        return redirect()->route('workouts.all')->with('success', 'Workout removed from favorites.');
    }
}
