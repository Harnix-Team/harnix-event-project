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
            'name' => 'Stéphane GNACADJA',
            'email' => 'stephanegnacadja584@gmail.com',
            'password' => Hash::make('123456789'),
            'phoneNumber' => '+229 955 311 36',
            'address' => 'Cotonou, Abomey',
            'birth_year' => now()->subYears(random_int(18, 40))->format('Y-m-d'), // Génération d'une date de naissance aléatoire entre 18 et 40 ans
            'gender' => 'Masculin', // Génération aléatoire du genre
            'status' => 'CEO Harnix', // Vous pouvez ajuster cela selon vos besoins
        ]);
    }
}
