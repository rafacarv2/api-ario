<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolinizacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polinizacao', function (Blueprint $table) {
            $table->foreignId('abelha_id')->constrained('abelha')->onDelete('cascade');
            $table->foreignId('planta_id')->constrained('planta')->onDelete('cascade');
            $table->primary(['planta_id', 'abelha_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('polinizacao');
    }
}
