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
        Schema::create('holokds', function (Blueprint $table) {
            $table->id();
            $table->string('language', 11)->nullable();
            //Chave Estrangeira
            $table->foreignId('user_id')->nullable();
            $table->string('name')->nullable()->unique();
            $table->longText('description')->nullable();
            $table->string('type_card', 1)->nullable();
            $table->string('category', 1)->nullable();
            $table->string('urlImage')->nullable();
            $table->string('urlAnimation')->nullable();
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
        Schema::dropIfExists('holokds');
    }
};
