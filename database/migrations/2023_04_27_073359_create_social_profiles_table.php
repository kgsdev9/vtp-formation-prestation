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
        Schema::create('social_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('google');
            $table->string('facebook');
            $table->string('github');
            $table->string('youtube');
            $table->unsignedBigInteger('prestataire_id');
            $table->unsignedBigInteger('entreprise_id');
            $table->foreign('prestataire_id')->references('id')->on('prestataires');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_profiles');
    }
};
