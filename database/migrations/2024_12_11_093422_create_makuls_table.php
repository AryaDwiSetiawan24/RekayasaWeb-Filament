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
        Schema::create('makuls', function (Blueprint $table) {
            $table->id();
            $table->string('kode_makul', 13);
            $table->string('nama_makul');
            $table->enum('fakultas', ['FTIK', 'FE', 'FH']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makuls');
    }
};
