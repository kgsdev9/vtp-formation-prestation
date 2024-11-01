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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('prix');
            $table->string('url_video')->nullable();
            $table->string('duration');
            $table->string('image');
            $table->enum('exercicescours', ['oui', 'non']);
            $table->enum('supportcourrs', ['oui', 'non']);
            $table->boolean('popular')->default('0');
            $table->boolean('published')->default('0');
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('entreprise_id');
            $table->unsignedBigInteger('typecourse_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');;
            $table->foreign('entreprise_id')->references('id')->on('entreprises')->onDelete('cascade');;
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');;
            $table->foreign('typecourse_id')->references('id')->on('type_courses')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
