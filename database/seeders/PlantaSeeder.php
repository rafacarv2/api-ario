<?php

namespace Database\Seeders;

use App\Models\Planta;
use Illuminate\Database\Seeder;

class PlantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Planta::factory()->create(['nome' => 'Rosa']);
        Planta::factory()->create(['nome' => 'Ipê Rosa']);
        Planta::factory()->create(['nome' => 'Ipê Amarelo']);
        Planta::factory()->create(['nome' => 'Lavanda']);
        Planta::factory()->create(['nome' => 'Laranja']);

    }
}
