<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Concert',
            'Festival',
            'Chill',
            'Conférence',
            'Sport',
            'Art et Culture',
            'Formation',
            'Congrès',
            'Technologie',
            'Santé et Bien-être',
            'Mode',
            'Séminaires',
            'Soirée Gala',
            'Célébration religieuse',
            'Autres'
            // Ajoutez d'autres catégories selon vos besoins
        ];

        foreach ($categories as $category) {
            DB::table('event_categories')->insert([
                'name' => $category,
            ]);
        }
    }
}
