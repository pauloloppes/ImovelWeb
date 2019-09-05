<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorretorInquilinoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corretor_inquilino', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table -> unsignedInteger('corretores_id');
            $table -> unsignedInteger('inquilinos_id');
            $table -> foreign('corretores_id') -> references('id') -> on('corretores');
            $table -> foreign('inquilinos_id') -> references('id') -> on('inquilinos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corretor_inquilino');
    }
}
