<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RateController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'show_book_list'])->name('books_list');
Route::get('/author', [AuthorController::class, 'show_author_list']);
Route::get('/rate', [RateController::class, 'show_rate_form']);
Route::post('/rate', [RateController::class, 'store_rating'])->name('store_rating');
