<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id_candidates'); //id candidato
            $table->string('name'); //Nome do candidato
            $table->date('date_of_birth'); //Data de nascimento do candidato
            $table->string('zip_code'); //Código de Endereçamento Postal do candidato
            $table->string('city'); //Cidade do Candidato
            $table->string('state'); //Estado do Candidato
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
        Schema::dropIfExists('candidates');
    }
}
