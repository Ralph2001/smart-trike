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
        Schema::create('driver_queue', function (Blueprint $table) {
             $table->id();
    $table->foreignId('driver_id')->constrained('users')->onDelete('cascade');  // Foreign key from users table
    $table->integer('queue_position');  // Position of the driver in the queue
    $table->enum('status', ['waiting', 'dispatched', 'on_ride'])->default('waiting');  // Current status
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('driver_queue');
    }
};
