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
        //
        Schema::create('input', function (Blueprint $table) {
            $table->id('id_input'); // Primary key
            $table->string('zona')->nullable();
            $table->string('unit')->nullable();
            $table->string('kode_wilayah');
            $table->string('kode_blok');
            $table->string('no_ktp')->nullable();
            $table->string('nama');
            $table->string('email')->nullable();
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('rt');
            $table->string('rw');
            $table->string('no_hp');
            $table->string('pekerjaan')->nullable();
            $table->string('tetap')->nullable();
            $table->string('tidak_tetap')->nullable();
            $table->string('tarif')->nullable();
            $table->string('tanah')->nullable();
            $table->string('bangunan')->nullable();
            $table->string('jalan')->nullable();
            $table->string('biayabp')->nullable();
            $table->string('bayarbp')->nullable();
            $table->string('sisabp')->nullable();
            $table->string('tanggal');
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('input');
    }
};