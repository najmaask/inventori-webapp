<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('KdPinjam')->unsigned()->unique();
            $table->integer('KdInventor')->unsigned()->unique();
            $table->integer('Jumlah');
            $table->timestamps();
            $table->foreign('KdPinjam')->references('id')->on('pinjams');
            $table->foreign('KdInventor')->references('id')->on('inventoriss');
            
            //$table->foreign('KdPinjam')->references('KdPinjam')->on('pinjams');
            //$table->foreign('KdInventor')->references('KdInventor')->on('inventoriss');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
