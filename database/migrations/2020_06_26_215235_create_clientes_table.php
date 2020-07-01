<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 300);
            $table->timestamps();
        });

        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 300);
            $table->bigInteger('cidades_id')->unsigned()->nullable();
            $table->foreign('cidades_id')->references('id')->on('cidades');
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
        Schema::dropIfExists('cidades');
        Schema::dropIfExists('clientes');
    }
}
