<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('123456789'),
            'phoneNumber' => Str::random(10),
            'address' => Str::random(10),
            'birth_year' => now()->subYears(random_int(18, 40))->format('Y-m-d'), // Génération d'une date de naissance aléatoire entre 18 et 40 ans
            'gender' => random_int(0, 1) ? 'male' : 'female', // Génération aléatoire du genre
            'status' => 'active', // Vous pouvez ajuster cela selon vos besoins
        ]);
    }
}
