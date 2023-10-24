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
        Schema::create('rating_buku', function (Blueprint $table) {
            $table->integer('skor_rating');
            $table->timestamp('tgl_rating')->useCurrent();

            $table->foreignId('idbuku');
            $table->foreign('idbuku')->references('idbuku')->on('buku');
            $table->foreignId('noktp');
            $table->foreign('noktp')->references('noktp')->on('anggota');
            $table->primary(['idbuku', 'noktp']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rating_buku');
    }
};
