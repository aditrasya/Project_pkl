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
        Schema::create('data_pks', function(Blueprint $table){
            $table->id('id_data_pks');
            $table->string('tanggal');
            $table->string('nama_perusahaan');
            $table->string('golongan')->nullable();
            $table->string('minimum')->nullable();
            $table->integer('tarif_1')->nullable();
            $table->integer('tarif_2')->nullable();
            $table->integer('tarif_3')->nullable();
            $table->string('masa_perjanjian')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('data_pks');
    }
};
