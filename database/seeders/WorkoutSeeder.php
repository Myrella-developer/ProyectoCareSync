<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Workout;

class WorkoutSeeder extends Seeder
{
    public function run()
    {
        Workout::create([
            'name' => 'Cardio Blast',
            'description' => 'High-intensity cardio workout to burn fat.',
            'durationTime' => 30,
            'user_id' => 1,
            'image' => 'workouts/cardo_blast.jpg', // Ruta de la imagen
        ]);

        Workout::create([
            'name' => 'Strength Training',
            'description' => 'Full-body strength training workout to build muscle.',
            'durationTime' => 45,
            'user_id' => 1,
            'image' => 'workouts/strength_training.jpg', // Ruta de la imagen
        ]);

        Workout::create([
            'name' => 'Yoga Flow',
            'description' => 'Relaxing yoga session to improve flexibility and reduce stress.',
            'durationTime' => 60,
            'user_id' => 1,
            'image' => 'workouts/yoga_flow.jpg', // Ruta de la imagen
        ]);

        Workout::create([
            'name' => 'HIIT Session',
            'description' => 'High-intensity interval training for maximum calorie burn.',
            'durationTime' => 20,
            'user_id' => 1,
            'image' => 'workouts/hiit_session.jpg', // Ruta de la imagen
        ]);

        Workout::create([
            'name' => 'Pilates Core',
            'description' => 'Core-focused pilates workout to strengthen abdominal muscles.',
            'durationTime' => 40,
            'user_id' => 1,
            'image' => 'workouts/pilates_core.jpg', // Ruta de la imagen
        ]);

        Workout::create([
            'name' => 'Morning Stretch',
            'description' => 'Gentle stretching routine to start your day off right.',
            'durationTime' => 15,
            'user_id' => 1,
            'image' => 'workouts/morning_stretch.jpg', // Ruta de la imagen
        ]);
    }
}
