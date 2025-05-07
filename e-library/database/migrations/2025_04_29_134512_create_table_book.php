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
        Schema::create('table_book', function (Blueprint $table) {
            $table->id();
            $table->string('Nama Buku');
            $table->string('Penerbit');
            $table->text('Description')->nullable();
            $table->integer('Tahun Penerbit');
            $table->integer('Jumlah Halaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_book');
    }
};
