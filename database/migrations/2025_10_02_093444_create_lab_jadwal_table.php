<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('laboratorium_jadwal', function (Blueprint $table) {
        $table->id();
        $table->string('nama');       // Nama lab (mis: Steve Jobs, Lab A, dll)
        $table->string('kelas');      // Kelas (mis: TI-3B)
        $table->string('matkul');     // Mata kuliah
        $table->string('waktu');      // Jam (08:00 - 12:10)
        $table->string('status')->default('Tersedia'); // default tersedia
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_jadwal');
    }
};
