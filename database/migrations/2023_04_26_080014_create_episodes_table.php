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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('duration');
            $table->enum('type_duree', ['heure', 'minute']);
            $table->string('previsualiation')->nullable();
            $table->string('url')->nullable();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('entreprise_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');;
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};
