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
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('order_number')->unique();
            $table->string('order_type'); // product, service, package
            $table->string('status')->default('pending'); // pending, confirmed, processing, completed, cancelled
            $table->decimal('subtotal', 15, 2);
            $table->decimal('discount', 15, 2)->default(0);
            $table->decimal('tax', 15, 2)->default(0);
            $table->decimal('management_fee', 15, 2)->default(0);
            $table->decimal('total', 15, 2);
            $table->string('customer_name');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->text('customer_address')->nullable();
            $table->string('deceased_name')->nullable();
            $table->foreignId('deceased_religion_id')->nullable()->constrained('religions')->nullOnDelete();
            $table->dateTime('service_date')->nullable();
            $table->text('service_location')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('assigned_team_id')->nullable()->constrained('teams')->nullOnDelete();
            $table->timestamp('completed_at')->nullable();
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
