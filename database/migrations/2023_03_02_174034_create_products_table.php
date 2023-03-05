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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->text('description')->nullable(); 
            $table->string('featured_image')->nullable();
            $table->float('instock')->nullable();
            $table->decimal('price', $precision = 7, $scale = 2);
            $table->unsignedInteger('productable_id')->nullable();
            $table->string('productable_type')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
