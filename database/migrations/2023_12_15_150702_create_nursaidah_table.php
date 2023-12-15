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
        Schema::create('nursaidah', function (Blueprint $table) {
            $table->string('Nama');
            $table->string('Nim');
            $table->string('Kelas');
            $table->string('Jurusan');
            $table->string('Semester');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nursaidah');
    }
};
