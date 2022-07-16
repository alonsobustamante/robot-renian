<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSunedusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sunedus', function (Blueprint $table) {
            $table->id();
            $table->string('abreviaturaTitulo',200);
            $table->string('apellidoMaterno',200);
            $table->string('apellidoPaterno',200);
            $table->string('nombres',200);
            $table->string('nroDocumento',200);
            $table->string('pais',200);
            $table->string('tipoDocumento',200);
            $table->string('tituloProfesional',200);
            $table->string('universidad',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sunedus');
    }
}
