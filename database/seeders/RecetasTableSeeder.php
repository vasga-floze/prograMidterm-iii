<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RecetasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Recetas::factory()->count(20)->create();
    }
}
