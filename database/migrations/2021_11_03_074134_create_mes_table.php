<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
        });

        DB::table('mes')->insert(array(
            ['nome'=> 'Janeiro'],
            ['nome'=> 'Fevereiro'],
            ['nome'=> 'Março'],
            ['nome'=> 'Abril'],
            ['nome'=> 'Maio'],
            ['nome'=> 'Junho'],
            ['nome'=> 'Julho'],
            ['nome'=> 'Agosto'],
            ['nome'=> 'Setembro '],
            ['nome'=> 'Outubro'],
            ['nome'=> 'Novembro'],
            ['nome'=> 'Dezembro'],
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mes');
    }
}
