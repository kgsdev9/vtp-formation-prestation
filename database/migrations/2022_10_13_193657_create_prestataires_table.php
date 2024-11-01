<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestataires', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prestataire');
            $table->string('prenom_prestataire');
            $table->string('identifiant')->nullable();
            $table->unsignedBigInteger('typepresatation_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('typepresatation_id')->references('id')->on('type_prestations');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->string('adresse');
            $table->string('ville');
            $table->string('pays');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->string('site_web')->nullable();
            $table->text('description')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('prestataires');
    }
}
