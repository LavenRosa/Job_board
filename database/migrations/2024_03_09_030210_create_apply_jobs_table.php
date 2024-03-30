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
        Schema::create('apply_jobs', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->unsignedBigInteger('job_id');
            $table->unsignedBigInteger('profile_id');
            $table->string('cv_form');
            $table->string('status');
            $table->date('submitted_date')->format('YYYY-MM-DD');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_jobs');
    }
};
