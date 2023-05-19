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
        Schema::create('daftar_prestasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_prestasi');
            $table->string('bidang_prestasi');
            $table->string('tahun_dapat_prestasi');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
