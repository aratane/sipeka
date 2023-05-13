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
        Schema::create('krs', function (Blueprint $table) {
            $table->id('id_krs');
            $table->string('IPK');
            $table->string('SKS');
            $table->string('Stambuk');
            $table->string('Prodi');
            $table->string('Fakultas');
            $table->string('KD_Penasehat');
            $table->string('Nm_Penasehat');
            $table->string('IPKSebelumnya');
            $table->string('RencanaSKS');
            $table->string('Nm_Mahasiswa');
            $table->string('JK');
            $table->string('Agama');
            $table->string('Alamat');
            $table->unsignedBigInteger('NIM');
            $table->foreign('NIM')->references('NIM')->on('mahasiswa');
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
        Schema::dropIfExists('k_r_s');
    }
};
