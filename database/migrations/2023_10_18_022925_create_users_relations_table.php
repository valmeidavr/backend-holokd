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
        Schema::create('users_relations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');     
            $table->unsignedBigInteger('user_id_rel');
            $table->foreign('user_id_rel')->references('id')->on('users');
            $table->integer('type_relation');
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_relations');
    }
};
