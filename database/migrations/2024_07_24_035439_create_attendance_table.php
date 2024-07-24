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
 Schema::create('attendance', function (Blueprint $table) {
            $table->id('attendance_id');
            $table->unsignedBigInteger('user_id');
            $table->dateTime('check_in_time')->nullable();
            $table->dateTime('check_out_time')->nullable();
            $table->date('date');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance');
    }
};
