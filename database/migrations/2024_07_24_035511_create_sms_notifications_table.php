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
      Schema::create('sms_notifications', function (Blueprint $table) {
            $table->id('notification_id');
            $table->unsignedBigInteger('sender_id');
            $table->string('recipient_phone_number', 20);
            $table->text('message_content');
            $table->enum('status', ['sent', 'failed', 'delivered']);
            $table->timestamp('timestamp')->useCurrent();
            $table->foreign('sender_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_notifications');
    }
};
