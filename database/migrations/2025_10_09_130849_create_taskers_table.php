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
        Schema::create('taskers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('profile_pic')->nullable();
            $table->string('job_title');
            $table->string('cost');
            $table->string('work_time')->nullable();
            $table->string('description')->nullable();
            $table->float('total_rate')->nullable();
            $table->float('work_quality')->nullable();
            $table->float('reliability')->nullable();
            $table->float('punctuality')->nullable();
            $table->float('solution')->nullable();
            $table->float('payout')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taskers');
    }
};
