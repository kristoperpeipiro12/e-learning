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
        Schema::create('nilai', function (Blueprint $table) {
            $table->integer('id_murid')->primary();
            $table->string('mapel');
            $table->foreign('mapel')->references('mapel')->on('mapels');
            $tabel->date('tanggal_isi');
            $tabel->enum('status'); $table->enum('status', ['selesai', 'tidak selesai']);
            $table->integer('nilai')->nullable();
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
