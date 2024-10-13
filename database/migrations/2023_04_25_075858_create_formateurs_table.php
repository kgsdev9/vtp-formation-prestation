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
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('poste')->nullable();
            $table->string('slug')->unique();
            $table->string('telephone');
            $table->string('whattsapp')->nullable();
            $table->integer('anneexperience');
            $table->string('avatar')->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['0', '1']);
            $table->boolean('popular')->default('0');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formateurs');
    }
};
