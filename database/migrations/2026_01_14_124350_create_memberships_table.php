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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('membership_plan_id')->constrained();
            $table->string('membership_number')->unique();
            $table->string('status')->default('pending'); // pending, active, expired, cancelled
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('next_billing_date')->nullable();
            $table->decimal('total_paid', 15, 2)->default(0);
            $table->string('beneficiary_name')->nullable();
            $table->string('beneficiary_phone')->nullable();
            $table->string('beneficiary_relation')->nullable();
            $table->text('digital_will')->nullable();
            $table->json('funeral_wishes')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
