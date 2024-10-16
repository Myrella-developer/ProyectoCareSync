<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Crear un usuario admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'usertype' => 'admin',
            'profile_photo' => 'profile-photos/admin_photo.jpg', // Ruta de la foto de perfil
            'age' => 35, // Edad
            'biography' => 'Hola soy el Admin', // Biografía
        ]);

        User::create([
            'name' => 'User 1',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
            'usertype' => 'user',
            'profile_photo' => 'profile-photos/user1_photo.jpg', // Ruta de la foto de perfil
            'age' => 30, // Edad
            'biography' => 'Hola soy Usuario 1', // Biografía
        ]);
    }
}
