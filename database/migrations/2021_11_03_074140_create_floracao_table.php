<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFloracaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floracao', function (Blueprint $table) {
            $table->foreignId('planta_id')->constrained('planta')->onDelete('cascade');
            $table->foreignId('mes_id')->constrained('mes')->onDelete('cascade');
            $table->primary(['planta_id', 'mes_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('floracao');
    }
}
