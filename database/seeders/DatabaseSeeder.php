<?php

namespace Database\Seeders;

use App\Models\Floracao;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AbelhaSeeder::class);
        $this->call(PlantaSeeder::class);
        $this->call(PolinizacaoSeeder::class);
        $this->call(FloracaoSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
