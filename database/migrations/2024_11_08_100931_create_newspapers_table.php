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
        Schema::create('newspapers', function (Blueprint $table) {
            $table->id();
            $table->string('Judul Surat Kabar');
            $table->string('Author');
            $table->year('Tahun terbit');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newspapers');
    }
};