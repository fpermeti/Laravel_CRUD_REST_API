<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Models\Book;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/books', [BooksController::class, 'getAllBooks']);

Route::get('/books/{id}', [BooksController::class, 'getBook']);

Route::post('/books', [BooksController::class, 'postBook']);

Route::put('/books/{id}', [BooksController::class, 'updateBook']);

Route::delete('/books/{id}', [BooksController::class, 'deleteBook']);

