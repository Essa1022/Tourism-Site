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
            $table->foreignId('user_id')->constrained();
            $table->foreignId('trip_id')->constrained();
            $table->integer('total_amount');
            $table->integer('adults_number');
            $table->integer('children_number')->nullable();
            $table->enum('order_status', ['pending', 'completed', 'canceled'])->default('pending');
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->enum('refund_status', ['not_requested', 'requested', 'processed', 'rejected'])->default('not_requested');
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
