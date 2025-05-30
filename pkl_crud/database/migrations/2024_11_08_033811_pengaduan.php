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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->string('keluhan');
            $table->string('pegawai')->nullable();
            $table->string('update_keluhan')->nullable();
            $table->foreignId('id_pelanggan')
                ->references('id_pelanggan')
                ->on('datapelanggan')
                ->onDelete('cascade');
            $table->timestamps(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
