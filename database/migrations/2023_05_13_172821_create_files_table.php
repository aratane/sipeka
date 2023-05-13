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
            $table->string('Nm_Mahasiswa')->nullable();
<<<<<<< HEAD:database/migrations/2023_05_13_172821_create_files_table.php
            $table->string('Nm_DosenWali')->nullable();
            $table->string('file');
            $table->unsignedBigInteger('NIDN')->nullable();
=======
            $table->string('Nm_DosenWali');
            $table->unsignedBigInteger('NIDN');
>>>>>>> 5f0b5be3bc8c91ef8d64565b57d6f0d30c1ad1fe:database/migrations/2023_05_12_220300_docskrs.php
            $table->foreign('NIDN')->references('NIDN')->on('dosen');
            $table->unsignedBigInteger('NIM')->nullable();
            $table->foreign('NIM')->references('NIM')->on('mahasiswa');
            $table->enum('status', ['disetujui', 'ditolak', 'diproses'])->nullable();
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
        Schema::dropIfExists('files');
    }
};
