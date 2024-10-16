<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestataireSpecialiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestataire_specialite', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specialite_id')->constrained('specialites')->onDelete('cascade');
            $table->foreignId('prestataire_id')->constrained('prestataires')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestataire_specialite');
    }
}
