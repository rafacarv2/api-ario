<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FloracaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('floracao')->insert(array(
            ['mes_id'=> 1, 'planta_id'=>1], ['mes_id'=> 1, 'planta_id'=>2],['mes_id'=> 1, 'planta_id'=>4],
            ['mes_id'=> 2, 'planta_id'=>3],['mes_id'=> 2, 'planta_id'=>4],['mes_id'=> 2, 'planta_id'=>5],
            ['mes_id'=> 3, 'planta_id'=>3],['mes_id'=> 3, 'planta_id'=>5],
            ['mes_id'=> 4, 'planta_id'=>1],['mes_id'=> 4, 'planta_id'=>2],['mes_id'=> 4, 'planta_id'=>3],['mes_id'=> 4, 'planta_id'=>4],['mes_id'=> 4, 'planta_id'=>5],
        ));
    }
}
