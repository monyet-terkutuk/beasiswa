<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('nisn', 20)->primary();
            $table->string('nama', 50);
            $table->string('kelas', 10);
            $table->date('tgl_lahir');
            $table->string('nama_ayah', 50);
            $table->string('nama_ibu', 50);
            $table->text('alamat');
            $table->string('no_hp', 20);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
