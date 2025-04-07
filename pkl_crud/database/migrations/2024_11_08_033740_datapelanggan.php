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
        Schema::create('datapelanggan', function (Blueprint $table) {
            $table->id('id_pelanggan');
            $table->string('cabang');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('kel_pelanggan');
            $table->timestamps(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datapelanggan');
    }
};
