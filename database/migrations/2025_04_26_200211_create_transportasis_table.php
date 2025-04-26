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
        Schema::create('transportasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata_id')->nullable();
            $table->foreignId('kuliner_id')->nullable();
            $table->foreignId('user_id');
            $table->string('transportasi');
            $table->date('tanggal_berangkat');
            $table->string('jam_berangkat');
            $table->integer('jumlah_orang');
            $table->double('harga');
            $table->string('status');
            $table->string('bukti_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportasis');
    }
};
