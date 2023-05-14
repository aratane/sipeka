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
            $table->string('SKS');
            $table->string('Stambuk');
            $table->unsignedBigInteger('No_Tlp');
            $table->string('Bio');
            $table->string('KDKrs')->nullable();
            $table->unsignedBigInteger('NIDN');
            $table->foreign('NIDN')->references('NIDN')->on('dosen');
            $table->enum('status_lulus', ['lulus', 'tidaklulus']);
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
