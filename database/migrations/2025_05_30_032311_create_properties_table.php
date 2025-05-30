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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Kos
            $table->enum('type', ['putra', 'putri', 'campuran', 'keluarga']); // Tipe Kos
            $table->string('address');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2); // Harga
            // ketersediaan kamar will be handled by querying the rooms table count or a specific field there.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
