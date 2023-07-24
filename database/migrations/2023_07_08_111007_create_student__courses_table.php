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
        Schema::create('student__courses', function (Blueprint $table) {
            $table->id();
            $table->string('mark');
            $table->unsignedBigInteger('courses_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('division_id');

            $table->foreign('courses_id')->references('id')->on('courses')->cascadeOnDelete();
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnDelete();
            $table->foreign('division_id')->references('id')->on('divisions')->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student__courses');
    }
};

