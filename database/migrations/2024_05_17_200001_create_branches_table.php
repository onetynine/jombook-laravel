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
        Schema::create('branches', function (Blueprint $table) {
            // Primary Key
            $table->id();

            // Timestamp (default)
            $table->timestamps();

            // Media Upload
            $table->string('photo')->nullable();
            $table->string('banner')->nullable();

            // Branch Info
            $table->string('name');
            $table->string('category');
            $table->string('halal_status');
            $table->string('summary')->nullable();
            $table->string('description')->nullable(); // add Summernote (rich text editor)
            $table->string('operation_time')->nullable();
            $table->string('address')->nullable();

            $table->string('submitted')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->string('approved')->nullable();
            $table->timestamp('approved_at')->nullable();

            // Soft Deletes
            $table->timestamp('deleted_at')->nullable(); 


            // Foreign Keys
            // $table->foreignId('customer_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('merchant_id')->nullable()->constrained()->onDelete('set null');
            // $table->foreignId('product_id')->nullable()->constrained()->onDelete('set null');
            // $table->foreignId('booking_id')->nullable()->constrained()->onDelete('set null');
            // $table->foreignId('review_id')->nullable()->constrained()->onDelete('set null');


            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
