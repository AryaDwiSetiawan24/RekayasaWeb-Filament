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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 13)->unique();
            $table->string('nama', 128);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('alamat', 128);
            $table->date('tanggal_lahir');
            $table->enum('fakultas', ['FTIK', 'FE', 'FH']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
