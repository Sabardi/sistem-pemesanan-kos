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
        Schema::create('property_property_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('properties')->onDelete('cascade');
            $table->foreignId('property_category_id', 'prop_cat_id')
                  ->constrained('property_categories')->onDelete('cascade');
            $table->string('details')->nullable();
            $table->timestamps();

            $table->unique(['property_id', 'property_category_id'], 'prop_prop_cat_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_property_category');
    }
};
