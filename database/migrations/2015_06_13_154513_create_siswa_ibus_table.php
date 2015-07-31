<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaIbusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa_ibus', function (Blueprint $table) {
            $table->integer('siswa_id')->unsigned()->index();
            $table->foreign('siswa_id')->references('id')->on('siswas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama',25);
            $table->string('tahun_lahir',4);
            $table->integer('pendidikan_id')->unsigned()->index();
            $table->foreign('pendidikan_id')->references('id')->on('pendidikans')->onUpdate('cascade');
            $table->integer('penghasilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('siswa_ibus');
    }
}
