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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


            // Merchant Info
            $table->string('customer_name');
            $table->string('contact')->unique();
            $table->string('date_of_birth')->nullable();
            $table->string('remark')->nullable();
            $table->string('status')->nullable();

            // Soft Deletes
            $table->timestamp('deleted_at')->nullable();


            $table->string('submitted')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->string('approved')->nullable();
            $table->timestamp('approved_at')->nullable();

            // Foreign Keys
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
