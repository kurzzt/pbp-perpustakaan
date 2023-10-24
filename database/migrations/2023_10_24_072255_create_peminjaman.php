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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('idtransaksi');
            $table->foreignId('noktp');
            $table->timestamp('tgl_pinjam');
            $table->foreignId('idpetugas');

            $table->foreign('noktp')->references('noktp')->on('anggota');
            $table->foreign('idpetugas')->references('idpetugas')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
