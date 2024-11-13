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
        Schema::create('tambahdatas', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->string('pekerjaan_yang_dilakukan');
            $table->string('tenaga_kerja');
            $table->string('peralatan_yang_digunakan');
            $table->string('bahan_diterima_ditolak');
            $table->string('cuaca');
            $table->string('masalah_dan_pemecahan');
            $table->string('perintah_yang_diberikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tambahdatas');
    }
};
