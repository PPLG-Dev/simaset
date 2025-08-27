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
        Schema::create('bangunan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_bangunan')->unique();
            $table->string('nama_bangunan');
            $table->foreignId('tanah_id')->constrained('tanah')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bangunan');
    }
};
