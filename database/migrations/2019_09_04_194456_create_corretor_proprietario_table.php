<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorretorProprietarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corretor_proprietario', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table -> unsignedInteger('corretores_id');
            $table -> unsignedInteger('proprietario_id');
            $table -> foreign('corretores_id') -> references('id') -> on('corretores');
            $table -> foreign('proprietario_id') -> references('id') -> on('proprietarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corretor_proprietario');
    }
}
