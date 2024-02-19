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
        Schema::create('job_offer_user', function (Blueprint $table) {
            // job offer foreign key.
            $table->unsignedBigInteger('job_offer_id');
            $table->foreign('job_offer_id')->references('id')->on('job_offers');
            // user foreign key.
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_offer_user');
    }
};
