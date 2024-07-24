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
          Schema::create('teacher_information', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('teacher_name', 100);
            $table->string('department', 50);
            $table->string('photo_url', 255);
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_information');
    }
};
