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
        Schema::create('kapalku', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('telepon');
            $table->string('nik');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kapalku');
    }
};