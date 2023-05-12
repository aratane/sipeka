<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id('NIM');
            $table->string('Nm_Mahasiswa');
            $table->string('Prodi');
            $table->string('Fakultas');
            $table->string('JK');
            $table->string('Agama');
            $table->string('Alamat');
            $table->string('IPK');
            $table->string('Stambuk');
            $table->string('KDKrs');
            $table->enum('status_lulus', ['lulus', 'tidaklulus']);
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
