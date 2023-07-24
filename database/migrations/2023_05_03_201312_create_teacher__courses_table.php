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
        Schema::create('teacher__courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courses_id')->references('id')->on('courses');
            $table->foreignId('teacher_id')->references('id')->on('teachers__valuation');     //
            $table->string('division_number')->uniqe();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher__courses');
    }
};
