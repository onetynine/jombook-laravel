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
            $table->timestamps();

            // Media Upload
            $table->string('photo');

            // Product Info
            $table->string('name');
            $table->string('description');
            $table->string('type');
            $table->string('price');

            $table->string('submitted')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->string('approved')->nullable();
            $table->timestamp('approved_at')->nullable();

            // Soft Deletes
            $table->timestamp('deleted_at')->nullable(); 

            // Foreign Keys
            $table->foreignId('branch_id')->nullable()->constrained()->onDelete('set null');
            // $table->foreignId('booking_id')->nullable()->constrained()->onDelete('set null');            
            
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
