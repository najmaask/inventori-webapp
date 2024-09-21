<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('KdPinjam');
            $table->date('TglPinjam');
            $table->date('TglKembali');
            $table->integer('KdPegawai')->unsigned()->unique();
            $table->integer('Status');
            $table->timestamps();

            $table->foreign('KdPegawai')->references('id')->on('pegawais');

            //$table->foregin('KdPegawai')->references('KdPegawai')->on('pegawais');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjams');
    }
}
