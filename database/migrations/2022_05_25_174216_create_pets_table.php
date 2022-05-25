<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('vet');
            $table->string('idpet');
            $table->string('name');
            $table->string('last');
            $table->string('dni');
            $table->string('code');
            $table->string('lotcode');
            $table->string('petname');
            $table->string('datebirth');
            $table->string('address');
            $table->string('district');
            $table->string('city');
            $table->string('countrycode');
            $table->string('home');
            $table->string('cel');
            $table->string('especie');
            $table->string('raza');
            $table->string('email');
            $table->string('sex');
            $table->string('color');
            $table->string('imagen');
            $table->string('status');
            $table->string('esteril');
            $table->unsignedBigInteger('code_id');
            $table->foreign('code_id')->references('id')->on('codes');
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
        Schema::dropIfExists('pets');
    }
}
