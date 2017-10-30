<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/* aqui tem algumas consideracoes, estava um nome "estranho" no arquivo .php, e precisa estar
   nos padroes corretos pro Laravel entender a migration, se tiver class CreateEstadosTable, 
   o arquivo php precisa chamar-se date_create_estados_table */
class CreateEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->increments('id_estado');
            $table->string('nome');
            $table->string('sigla');
            $table->string('fuso');
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
        Schema::dropIfExists('users');
    }
}
