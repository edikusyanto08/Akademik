<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nama',25);
            $table->enum('gender',['L','P']);
            $table->string('nis',10);
            $table->string('nisn',10);
            $table->string('tempat_lahir',20);
            $table->date('tanggal_lahir');
            $table->enum('agama',['islam','kristen protestant','kristen katolik','buddha','hindu']);
            $table->string('nik',20);
            $table->enum('penerima_kps',['ya','tidak']);
            $table->string('no_kps',20);
            $table->string('no_skhun',20);
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
        Schema::drop('siswas');
    }
}
