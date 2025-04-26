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
        Schema::create('produk_lokals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id');
            $table->string('nama_produk');
            $table->string('kategori');
            $table->integer('stok');
            $table->double('harga');
            $table->string('gambar');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_lokals');
    }
};
