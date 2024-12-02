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
        Schema::create('vebinars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('author');
            $table->string('author_email')->nullable();
            $table->string('speaker');
            $table->string('speaker_email')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->dateTime('start_registration');
            $table->dateTime('end_registration');
            $table->string('status');
            $table->string('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vebinars');
    }
};
