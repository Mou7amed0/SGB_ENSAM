<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responsable', function (Blueprint $table) {
            $table->id();
            $table->string("cin")->unique();
            $table->string("nom");
            $table->string("prenom");
            $table->date("date_de_naissance");
            $table->string("adresse");
            $table->string("email_intitutionnel");
            $table->string("email_personnel");
            $table->enum("sexe", ["male", "female"]);
            $table->timestamps();

            // foreign key
            $table->unsignedBigInteger('user_id');

        });
        Schema::table('responsable', function (Blueprint $table) {
        $table->foreign('user_id')->references('id')->on("users");
    });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responsables');
    }
};
