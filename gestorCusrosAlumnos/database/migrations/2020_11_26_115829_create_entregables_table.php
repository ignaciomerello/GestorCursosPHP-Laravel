<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregables', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',64);
            $table->timestamps();

            //relacion de tablas
            $table->foreignId('curso_id')->constrained('cursos');
        });

}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entregables');
    }
}
