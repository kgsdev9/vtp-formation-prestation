<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entreprise');
            $table->string('siren')->nullable();
            $table->string('numero_tva')->nullable();
            $table->string('type_entreprise')->nullable();
            $table->text('adresse');
            $table->string('ville');
            $table->string('code_postal');
            $table->string('pays');
            $table->string('telephone')->nullable();
            $table->string('email')->unique();
            $table->string('site_web')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->integer('nombre_employes')->nullable();
            $table->decimal('chiffre_affaires', 15, 2)->nullable(); 
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
        Schema::dropIfExists('entreprises');
    }
}
