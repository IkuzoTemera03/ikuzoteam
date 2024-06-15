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
        Schema::create('tiket_sampahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_sampah_id')->references('id')->on('jenis_sampahs')->onDelete('cascade');
            $table->foreignId('penukar_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->text('alamat');
            $table->boolean('status_sampah')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_sampahs');
    }
};
