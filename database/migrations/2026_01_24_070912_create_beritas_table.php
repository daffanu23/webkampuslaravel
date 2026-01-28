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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');      // Kolom untuk Judul
            $table->text('isi');          // Kolom untuk Isi Berita (Panjang)
            $table->string('gambar')->nullable(); // Kolom Gambar (Boleh kosong/nullable)
            $table->timestamps();         // Otomatis buat kolom created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
