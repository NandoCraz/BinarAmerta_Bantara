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
        Schema::create('volunters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kota_id');
            $table->string('nama_acara');
            $table->string('lokasi');
            $table->string('tanggal');
            $table->string('longitude');
            $table->string('latitude');
            $table->text('deskripsi');
            $table->double('harga');
            $table->string('link_maps');
            $table->integer('kuota');
            $table->string('banner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunters');
    }
};
