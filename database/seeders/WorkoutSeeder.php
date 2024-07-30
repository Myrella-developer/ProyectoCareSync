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
        ]);


    }
}
