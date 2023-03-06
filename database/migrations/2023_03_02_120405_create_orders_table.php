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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->dateTime('date')->nullable();
            $table->string('code')->nullable();
            $table->text('description')->nullable();
            $table->decimal('discount')->nullable();
            $table->enum('status',['pending,delivered,cancelled']);
            $table->dateTime('date_paid')->nullable();
            $table->dateTime('date_delivered')->nullable();
            $table->dateTime('date_cancelled')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
