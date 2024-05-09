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
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->nullableUuidMorphs('payable');
            $table->string("transid")->nullable();
            $table->string("reference")->nullable();
            $table->string("result")->nullable();
            $table->string("resultcode")->nullable();
            $table->string("payment_status")->nullable();
            $table->double("amount")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
