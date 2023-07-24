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
        Schema::create('teachers__valuation', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('circle_id')->references('id')->on('circles');
            // $table->string('teacher_id');
            $table->integer('evaluation');
            $table->integer('count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers__valuation');
    }
};
