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
        Schema::create('buku', function (Blueprint $table) {
            $table->id('idbuku');
            $table->string('isbn');
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('kota_terbit');
            $table->string('editor');
            $table->string('file_gambar');
            $table->timestamp('tgl_insert')->useCurrent();
            $table->timestamp('tgl_update')->useCurrent();
            $table->string('stok');
            $table->string('stok_tersedia');
            
            $table->foreignId('idkategori');
            $table->foreign('idkategori')->references('idkategori')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
