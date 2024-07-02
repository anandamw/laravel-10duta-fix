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
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('domisili');
            $table->integer('umur');
            $table->enum('jenis_kelamin', [0, 1]);
            $table->string('angkatan');
            $table->string('berkas');
            $table->string('gambar');
            $table->string('no_whatsapp');
            $table->string('email');
            $table->text('visi');
            $table->text('misi');
            $table->double('tinggi_badan');
            $table->double('berat_badan');
            $table->enum('role', ['mahasiswa', 'kandidat', 'admin']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidats');
    }
};
