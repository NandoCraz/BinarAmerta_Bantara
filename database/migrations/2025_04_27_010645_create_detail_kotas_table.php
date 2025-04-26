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
        Schema::create('detail_kotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kota_id');
            $table->text('deskripsi');
            $table->text('fun_fact');
            $table->text('waktu_terbaik_berlibur');
            $table->text('festival');
            $table->text('fakta_penting');
            $table->text('produk_umkm');
            $table->text('destinasi_wisata');
            $table->integer('sentimen_positif');
            $table->integer('sentimen_negatif');
            $table->integer('sentimen_netral');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kotas');
    }
};
