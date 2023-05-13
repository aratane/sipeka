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
        Schema::create('dockrs', function (Blueprint $table) {
            $table->id('Kd_Krs');
            $table->string('Nm_Mahasiswa');
            $table->string('Nm_DosenWali');
            $table->unsignedBigInteger('NIDN');
            $table->foreign('NIDN')->references('NIDN')->on('dosen');
            $table->unsignedBigInteger('NIM');
            $table->foreign('NIM')->references('NIM')->on('mahasiswa');
            $table->enum('status', ['disetujui', 'ditolak', 'diproses']);
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
        //
    }
};
