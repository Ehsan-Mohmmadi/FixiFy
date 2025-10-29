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
            $table->string('profile')->nullable();
            $table->string('job_title')->nullable();
            $table->string('cost')->default(0);
            $table->string('work_time');
            $table->string('description')->nullable();
            $table->float('total_rate')->default(0);
            $table->float('work_quality')->default(0);
            $table->float('reliability')->default(0);
            $table->float('punctuality')->default(0);
            $table->float('solution')->default(0);
            $table->float('pay_out')->default(0);
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
