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
   Schema::create('qr_codes', function (Blueprint $table) {
            $table->id('qr_code_id');
            $table->unsignedBigInteger('user_id');
            $table->text('qr_code_image');
            $table->timestamp('generated_on')->useCurrent();
            $table->foreign('user_id')->references('id')->on('users');
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_codes');
    }
};
