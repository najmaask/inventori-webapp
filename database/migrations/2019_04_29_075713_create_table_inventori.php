<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInventori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('inventoriss',function(Blueprint $table){
            $table->increments('id');
            $table->string('KdInventor');
            $table->string('NamaInventor');
            $table->integer('KdJenis')->unsigned()->unique();
            $table->string('Kondisi');
            $table->integer('Jumlah');
            $table->date('TglRegister');
            $table->integer('KdRuang')->unsigned()->unique();
            $table->string('Ket');
            $table->integer('KdPetugas')->unsigned()->unique();
            $table->timestamps();

            //FUNGSI UNTUK MENGATUR RELASI DI TABLE DENGAN LARAVEL
            $table->foreign('KdJenis')->references('id')->on('jeniss');
            $table->foreign('KdRuang')->references('id')->on('ruangs');
            $table->foreign('KdPetugas')->references('id')->on('petugass');
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
        Schema::dropIfExists('inventoriss');
    }
}
