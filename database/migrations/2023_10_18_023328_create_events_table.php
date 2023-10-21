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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inventary_holokd_id');
            $table->foreign('inventary_holokd_id')->references('id')->on('users');     
            $table->string('event_type')->nullable();
            $table->string('event_subcategory')->nullable();
            $table->string('event_title')->nullable();
            $table->string('event_subtitle')->nullable();
            $table->string('event_equipment')->nullable();
            $table->string('timezone')->nullable();
            $table->integer('event_duration')->nullable();
            $table->integer('viewing_duration')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('geo_longitude')->nullable();
            $table->string('geo_latitude')->nullable();
            $table->string('device')->nullable();
            $table->string('ip')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
