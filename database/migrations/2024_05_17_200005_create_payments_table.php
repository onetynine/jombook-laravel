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
            $table->id();
            $table->timestamps();

            // Payment Info
            $table->decimal('amount', 10, 2);
            $table->string('payment_method');
            $table->string('status');

            // Soft Deletes
            $table->timestamp('deleted_at')->nullable();


            // Foreign Keys
            $table->foreignId('customer_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('merchant_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('booking_id')->nullable()->constrained()->onDelete('set null');
            
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
