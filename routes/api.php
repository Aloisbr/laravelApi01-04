<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Author;

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;

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

Route::get("books/search/title/{title}", [BookController::class, 'searchbyTitle']);
Route::get("books/search/year/{year}", [BookController::class, 'searchbyYear']);

Route::resource('books', BookController::class);
Route::resource('genres', GenreController::class);
Route::resource('authors', AuthorController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
