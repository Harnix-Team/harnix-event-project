<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'VIP',
            'GOLD',
            'SIMPLE',
            'STANDARD',
            'COUPLE',
            'GOUPR DE 10',
            'PRENIUM',
            
            // Ajoutez d'autres catégories selon vos besoins
        ];

        foreach ($categories as $category) {
            DB::table('tickets_categories')->insert([
                'name' => $category,
            ]);
        }
    }
}
