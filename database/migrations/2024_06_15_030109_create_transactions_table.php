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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id');

            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();

            $table->string('courier')->nullable();

            $table->string('payment')->default('MIDTRANS');
            $table->string('payment_url')->nullable();

            $table->bigInteger('total_payment');
            $table->string('status')->default('PENDING');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
