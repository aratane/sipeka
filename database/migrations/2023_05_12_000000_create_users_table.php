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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('NIM')->nullable();
            $table->foreign('NIM')->references('NIM')->on('mahasiswa');
            $table->unsignedBigInteger('NIDN')->nullable();
            $table->foreign('NIDN')->references('NIDN')->on('dosen');
            $table->unsignedBigInteger('NIP')->nullable();
            $table->foreign('NIP')->references('NIP')->on('kaprodi');
            $table->enum('role', ['admin', 'kaprodi', 'dosen', 'mahasiswa'])->default('mahasiswa');
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
        Schema::dropIfExists('users');
    }
};
