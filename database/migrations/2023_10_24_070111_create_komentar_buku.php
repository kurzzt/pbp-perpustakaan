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
        Schema::create('komentar_buku', function (Blueprint $table) {
            $table->id('idkomentar');
            $table->foreignId('idbuku')->unique();
            $table->foreignId('noktp')->unique();
            $table->string('komentar');

            $table->foreign('idbuku')->references('idbuku')->on('buku');
            $table->foreign('noktp')->references('noktp')->on('anggota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar_buku');
    }
};
