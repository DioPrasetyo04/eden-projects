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
        Schema::create('membership_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->decimal('protection_amount', 15, 2);
            $table->decimal('monthly_fee', 15, 2);
            $table->decimal('yearly_fee', 15, 2);
            $table->integer('min_age');
            $table->integer('max_age');
            $table->integer('waiting_period_days')->default(0);
            $table->text('description')->nullable();
            $table->text('terms_conditions')->nullable();
            $table->boolean('is_recommended')->default(false);
            $table->boolean('is_active')->default(true);
            $table->string('color')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_plans');
    }
};
