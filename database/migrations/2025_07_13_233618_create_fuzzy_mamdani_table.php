<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('fuzzy_mamdani', function (Blueprint $table) {
            $table->id('id_fuzzy'); // auto increment primary key
            $table->unsignedBigInteger('id_sosial_ekonomi');
            $table->float('kelayakan');
            $table->enum('status', ['layak', 'tidak_layak']);
            $table->date('tgl_proses');
        
            $table->foreign('id_sosial_ekonomi')
                ->references('id_sosial_ekonomi')
                ->on('sosial_ekonomi')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('fuzzy_mamdani');
    }
};
