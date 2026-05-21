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
        Schema::create('banks_account', function (Blueprint $table) {
            $table->id();
            $table->string('account_number', 10)->unique();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->integer('phone_number');
            $table->decimal('balance', 15, 2)->default(0);
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks_account');
    }
};
