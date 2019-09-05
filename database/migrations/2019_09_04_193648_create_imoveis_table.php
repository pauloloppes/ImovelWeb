<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table -> string('endereco', 80);
            $table -> string('bairro', 40);
            $table -> string('cidade', 40);
            $table -> string('cep', 10);
            $table -> string('uf', 2);
            $table -> double('aluguel');
            $table -> unsignedInteger('proprietarios_id');
            $table -> foreign('proprietarios_id') -> references('id') -> on('proprietarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imoveis');
    }
}
