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
        Schema::create('proyektors', function (Blueprint $table) {
            $table->id();
            $table->string('kode_proyektor', 10)->unique();
            $table->string('merk', 50);
            $table->string('tipe', 50)->nullable();
            $table->string('status', 20)->default('tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyektors');
    }
};
