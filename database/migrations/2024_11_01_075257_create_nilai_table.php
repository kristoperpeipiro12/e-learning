<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->integer('id_murid')->primary();
            $table->string('id_mapel');
            $table->foreign('id_mapel')->references('id_mapel')->on('mapels');
            $table->date('tanggal_isi');
            $table->enum('status', ['selesai', 'tidak selesai']); // Mendefinisikan enum status
            $table->integer('nilai')->nullable(); // Mengizinkan nilai null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
