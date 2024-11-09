<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestations', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('prix', 10, 2);
            $table->boolean('is_published')->default('0');
            $table->unsignedBigInteger('prestaire_id')->nullable();
            $table->integer('duree_estimee')->nullable();
            $table->enum('type_duree', ['heure', 'minute']);
            $table->foreign('prestaire_id')->references('id')->on('prestataires')->onDelete('cascade');;
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
        Schema::dropIfExists('prestations');
    }
}
