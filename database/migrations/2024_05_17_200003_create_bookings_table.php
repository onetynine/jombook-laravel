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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Booking Info
            $table->time('slot'); // timestamp
            $table->string('remark')->nullable();

            $table->string('submitted')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->string('accepted')->nullable();
            $table->timestamp('accepted_at')->nullable();

            // Soft Deletes
            $table->timestamp('deleted_at')->nullable();

            // Foreign Keys
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('branch_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('product_id')->nullable()->constrained()->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
