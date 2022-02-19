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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date("date_reservation");

            // foreign keys
            $table->unsignedBigInteger('etudiant_id');


            $table->unsignedBigInteger('copy_id');
            $table->timestamps();
        });
        Schema::table('reservations', function (Blueprint $table) {
            $table->foreign('etudiant_id')->references('id')->on("etudiants");
            $table->foreign('copy_id')->references('id')->on("copies");

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
