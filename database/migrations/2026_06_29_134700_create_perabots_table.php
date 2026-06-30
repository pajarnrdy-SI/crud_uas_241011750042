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
        Schema::create('perabots', function (Blueprint $table) {
    $table->id('id_perabot');
    $table->string('gambar')->nullable();
    $table->string('nama_perabot');
    $table->string('bahan');
    $table->string('ukuran');
    $table->decimal('harga', 12, 2);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perabots');
    }
};
