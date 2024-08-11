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
        Schema::create('merchants', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Timestamp (default)
            $table->timestamps();

            // Merchant Info
            $table->string('company_name')->unique();
            $table->string('registration_number')->unique();
            $table->string('registration_document')->nullable(); // ssm docmentation
            $table->string('business_type');
            
            // Person in-Charge Info
            $table->string('in_charge_name');
            $table->string('in_charge_nric');
            $table->string('in_charge_designation');
            $table->string('in_charge_contact');

             // Soft Deletes
            $table->timestamp('deleted_at')->nullable();


            $table->string('submitted')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->string('approved')->nullable();
            $table->timestamp('approved_at')->nullable();

            // Foreign Keys
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            // $table->foreignId('branch_id')->nullable()->constrained()->onDelete('set null');
            // $table->foreignId('booking_id')->nullable()->constrained()->onDelete('set null');
            // $table->foreignId('payment_id')->nullable()->constrained()->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchants');
    }
};
