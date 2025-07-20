<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('sosial_ekonomi', function (Blueprint $table) {
            $table->id('id_sosial_ekonomi')->primary();
            $table->string('nisn', 20);
            $table->string('jml_penghasilan', 10);
            $table->string('tanggungan', 10);
            $table->string('tempat_tinggal', 225);
            $table->string('aset', 225);
            $table->string('pkh', 225)->nullable();
            $table->string('dtks', 225)->nullable();
            $table->string('sktm', 225)->nullable();
            

            $table->foreign('nisn')->references('nisn')->on('siswa')->onDelete('cascade');
            $table->index('nisn');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sosial_ekonomi');
    }
};
