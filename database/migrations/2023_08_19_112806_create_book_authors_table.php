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
        Schema::create('book_authors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fk_book_id')->unsigned();
            $table->foreign('fk_book_id')->references('id')->on('books');
            $table->bigInteger('fk_author_id')->unsigned();
            $table->foreign('fk_author_id')->references('id')->on('authors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_authors');
    }
};
