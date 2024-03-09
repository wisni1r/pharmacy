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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id()->startFrom(500000);
            $table->foreignId('customer_id')->constrained();
            $table->foreignId('prescriber_id')->constrained();
            $table->foreignId('location_id')->constrained();
            $table->foreignId('item_id')->constrained();
            $table->integer('quantity');
            $table->dateTime('filled_at')->nullable();
            $table->foreignId('filled_by')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
