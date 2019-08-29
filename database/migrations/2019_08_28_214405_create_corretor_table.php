<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorretorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corretor', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome', 70);
            $table->string('creci', 15)->nullable();
            $table->string('fone', 15);
            $table->string('email', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corretor');
    }
}
