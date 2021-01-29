<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacions', function (Blueprint $table) {
            $table->id();
            $table->string('nosotros');
            $table->string('facebook');
            $table->string('instagran');
            $table->string('twitter');
            $table->string('correo');
            $table->string('wsp');
            $table->string('ruta_slider1');
            $table->string('texto1');
            $table->string('ruta_slider2');
            $table->string('texto2');
            $table->string('ruta_slider3');
            $table->string('texto3');
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
        Schema::dropIfExists('informacions');
    }
}
