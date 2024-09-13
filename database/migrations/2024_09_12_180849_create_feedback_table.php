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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('no_kamar');
            $table->string('nama');
            $table->string('alamat');
            $table->string('phone');
            $table->string('email');
            $table->string('maksud_kunjungan');
            $table->string('kamar');
            $table->string('makan_pagi');
            $table->string('makan_minuman');
            $table->string('pelayanan');
            $table->string('kebersihan');
            $table->string('pelayanan_spa');
            $table->string('penampilan_karyawan');
            $table->string('keramahtamahan');
            $table->string('kunjungan');
            $table->string('datang');
            $table->string('saran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
