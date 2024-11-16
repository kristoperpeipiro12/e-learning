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
        Schema::create('soal', function (Blueprint $table) {
            $table->id('id_soal');
            $table->string('id_mapel');
            $table->foreign('id_mapel')->references('id_mapel')->on('mapels');
            $table->text('soal');
            $table->string('gambar_soal')->nullable();
            $table->string('video_soal')->nullable();
            $table->integer('jumlah_soal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal');
    }
};
