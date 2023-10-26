<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca',50);
            $table->string('modello',100);
            $table->string('targa');
            $table->string('allestimento');
            $table->integer('numero_posti');
            $table->integer('prezzo_n_g');
            $table -> date('data_inizio');
            $table -> date('data_fine');
            $table->text('image')->nullable();
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
        Schema::dropIfExists('autos');
    }
};
