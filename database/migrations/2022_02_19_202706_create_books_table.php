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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string("edition");
            $table->date("date_edition");
            $table->string("ISBN");
            $table->binary('book_image');
            $table->text("description");
            $table->timestamps();

            // foreign key
            $table->timestamps();
            $table->integer('id_categorie')->unsigned();

        });
        Schema::table('books', function (Blueprint $table) {
            $table->foreign('id_categorie')->references('id')->on("categories")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
