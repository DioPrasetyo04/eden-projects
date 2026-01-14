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
        Schema::create('membership_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membership_id')->constrained()->cascadeOnDelete();
            $table->decimal('amount', 15, 2);
            $table->string('payment_method')->nullable();
            $table->dateTime('payment_date');
            $table->date('period_start');
            $table->date('period_end');
            $table->string('transaction_id')->nullable();
            $table->string('status')->default('pending'); // pending, paid, failed
            $table->string('receipt_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_payments');
    }
};
