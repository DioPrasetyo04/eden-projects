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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('type'); // general, service_estimate, coffin_order, membership
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('subject')->nullable();
            $table->text('message');
            $table->foreignId('service_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('product_id')->nullable()->constrained()->nullOnDelete();
            $table->string('preferred_contact')->default('email'); // email, phone, whatsapp
            $table->string('status')->default('new'); // new, in_progress, responded, closed
            $table->foreignId('responded_by')->nullable()->constrained('users');
            $table->timestamp('responded_at')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
