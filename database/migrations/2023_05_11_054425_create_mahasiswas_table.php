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
            $table->string('nama');
            $table->string('prodi');
            $table->string('fakultas');
            $table->unsignedBigInteger('id_mapel');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('alamat');
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
