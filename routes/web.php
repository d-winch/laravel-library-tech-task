<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookLoanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('add-book', [BookController::class, 'addBookForm']);
Route::post('insert-book', [BookController::class, 'insert']);

Route::get('loan-book', [BookLoanController::class, 'addBookLoanForm']);
Route::post('insert-book-loan', [BookLoanController::class, 'insert']);