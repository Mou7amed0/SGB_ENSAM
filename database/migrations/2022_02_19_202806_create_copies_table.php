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
        Schema::create('copies', function (Blueprint $table) {
            $table->id();
            $table->enum("state", ["disponible", "reserve", "perdu"]);
            $table->unsignedBigInteger('book_id');
            $table->timestamps();

        });
        Schema::table('copies', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on("books")->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('copies');
    }
};
