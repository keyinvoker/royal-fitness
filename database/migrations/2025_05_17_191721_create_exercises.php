<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('video_url');
            $table->integer('duration_minutes');
            $table->integer('equipment_id');
            $table->foreign('equipment_id')->references('id')->on('equipments');
            $table->integer('type_id');
            $table->foreign('type_id')->references('id')->on('exercise_types');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
