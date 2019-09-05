<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquilinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquilinos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table -> string('nome', 70);
            $table -> string('documento', 15);
            $table -> string('fone', 15);
            $table -> string('email', 50);
            $table -> unsignedInteger('imoveis_id');
            $table -> foreign('imoveis_id') -> references('id') -> on('imoveis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inquilinos');
    }
}
