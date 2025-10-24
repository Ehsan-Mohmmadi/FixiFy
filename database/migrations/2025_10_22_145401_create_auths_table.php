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
        Schema::create('auths', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('apple_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('verification_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auths');
    }
};
