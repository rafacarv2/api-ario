<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PolinizacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('polinizacao')->insert(array(
            ['abelha_id'=> 1, 'planta_id'=>1], ['abelha_id'=> 1, 'planta_id'=>2],['abelha_id'=> 1, 'planta_id'=>4],
            ['abelha_id'=> 2, 'planta_id'=>3],['abelha_id'=> 2, 'planta_id'=>4],['abelha_id'=> 2, 'planta_id'=>5],
            ['abelha_id'=> 3, 'planta_id'=>3],['abelha_id'=> 3, 'planta_id'=>5],
            ['abelha_id'=> 4, 'planta_id'=>1],['abelha_id'=> 4, 'planta_id'=>2],['abelha_id'=> 4, 'planta_id'=>3],['abelha_id'=> 4, 'planta_id'=>4],['abelha_id'=> 4, 'planta_id'=>5],
        ));
    }
}
