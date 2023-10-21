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
        Schema::create('inventary_holokds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('holokd_id')->nullable();
            $table->string('type_card')->nullable();
            $table->integer('coins')->nullable();
            $table->integer('xp')->nullable();
            $table->integer('nivel')->nullable();
            $table->integer('strengh')->nullable();
            $table->integer('speed')->nullable();
            $table->integer('energy')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventary_holokds');
    }
};
