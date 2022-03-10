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
        //
        Schema::create('cp_migration', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo');
            $table->string('asentamiento');
            $table->string('tipo_asentamiento');
            $table->string('municipio');
            $table->string('estado');
            $table->string('ciudad');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('cp_migration');
    }
};
