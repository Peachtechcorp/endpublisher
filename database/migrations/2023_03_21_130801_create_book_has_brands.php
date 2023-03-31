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
        Schema::create('books_has_brands', function (Blueprint $table) {
            $table->foreignId('book_id')->constrained('books');
            $table->foreignId('brand_id')->constrained('brands');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('books_has_brands');
    }
};
