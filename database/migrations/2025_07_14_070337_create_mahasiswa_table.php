<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('prodi');
            $table->string('email')->unique();
            $table->string('no_hp_wa'); // Nomor WhatsApp
            $table->string('password'); // Untuk login mahasiswa
            $table->string('qr_code_path')->nullable(); // Path QR Code mahasiswa
            $table->timestamps();
        });


    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
