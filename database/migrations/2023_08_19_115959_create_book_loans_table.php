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
        Schema::create('book_loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fk_member_id')->unsigned();
            $table->foreign('fk_member_id')->references('id')->on('library_members');
            $table->bigInteger('fk_stock_id')->unsigned();
            $table->foreign('fk_stock_id')->references('id')->on('library_stocks');
            $table->date('loan_date');
            $table->date('return_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_loans');
    }
};
