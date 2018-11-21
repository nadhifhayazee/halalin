<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuamisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suamis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jenis_kelamin')->default('Laki-laki');
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->string('warganegara');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->string('nama_ayah');
            $table->string('status');
            $table->integer('id_ibu')->nullable();
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
        Schema::dropIfExists('suamis');
    }
}
