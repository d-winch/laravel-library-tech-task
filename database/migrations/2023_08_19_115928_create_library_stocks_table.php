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
        Schema::create('library_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fk_book_id')->unsigned();
            $table->foreign('fk_book_id')->references('id')->on('books');
            $table->bigInteger('fk_library_id')->unsigned();
            $table->foreign('fk_library_id')->references('id')->on('libraries');
            $table->bigInteger('no_copies');
            $table->date('date_added');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('library_stocks');
    }
};
