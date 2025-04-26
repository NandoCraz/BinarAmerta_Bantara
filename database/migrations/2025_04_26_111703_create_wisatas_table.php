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
        Schema::create('wisatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kota_id');
            $table->string('nama_tempat');
            $table->text('deskripsi');
            $table->double('harga');
            $table->float('rating');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('link_maps');
            $table->string('link_video');
            $table->string('gambar_tempat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisatas');
    }
};
