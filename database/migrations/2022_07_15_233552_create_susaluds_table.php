<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSusaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('susaluds', function (Blueprint $table) {
            $table->id();
            $table->string('nuDni',10);
            $table->string('preNombres',255);
            $table->string('apPaterno', 255);
            $table->string('apMaterno', 255);
            $table->string('apCasado', 255);
            $table->string('deDireccion', 255);
            $table->string('coGenero', 5);
            $table->string('feNac', 40);
            $table->string('coUbigeo',10);
            $table->string('coUbigeoDep', 10);
            $table->string('coUbigeoPro', 10);
            $table->string('coUbigeoDis', 10);
            $table->string('deUbigeoDep', 200);
            $table->string('deUbigeoPro', 200);
            $table->string('deUbigeoDis', 200);
            $table->boolean('wsReniec');
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
        Schema::dropIfExists('susaluds');
    }
}
