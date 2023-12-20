<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear un usuario de prueba utilizando el modelo User
        User::create([
            'name' => 'Luis Sauri',
            'email' => 'luisasauri@gmail.com',
            'password' => Hash::make('mjolnir98'),
        ]);

    }
}
