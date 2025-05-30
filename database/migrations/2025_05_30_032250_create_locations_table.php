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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('province')->nullable(); // Provinsi
            $table->string('regency')->nullable(); // Kabupaten/Kota
            $table->string('district')->nullable(); // Kecamatan
            $table->string('village')->nullable(); // Desa/Kelurahan
            $table->string('address_line')->nullable(); // Detail alamat jalan, nomor rumah
            $table->string('postal_code')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
