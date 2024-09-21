<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('petugass',function(Blueprint $table){
            $table->increments('id');
            $table->string('KdPetugas');
            $table->string('NamaPetugas');
            $table->string('Username');
            $table->string('Password');
            $table->integer('IdLevel')->unsigned()->unique();
            $table->timestamps();
            $table->foreign('IdLevel')->references('id')->on('levels');

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
        Schema::dropIfExists('petugass');
    }
}
