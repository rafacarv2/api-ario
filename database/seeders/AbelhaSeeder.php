<?php

namespace Database\Seeders;

use App\Models\Abelha;
use Illuminate\Database\Seeder;

class AbelhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Abelha::factory()->create(['nome' => 'Uruçu', 'nome_cientifico' => 'Melipona scutellaris'],);
        Abelha::factory()->create(['nome' => 'Uruçu-Amarela', 'nome_cientifico' => 'Melipona rufiventris'],);
        Abelha::factory()->create(['nome' => 'Guarupu', 'nome_cientifico' => 'Melipona bicolor'],);
        Abelha::factory()->create(['nome' => 'Iraí', 'nome_cientifico' => 'Nannotrigona testaceicornes'],);

    }
}
