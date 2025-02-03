<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

//Route::get('/books/create', 'Bookcontrollercreate' );
Route::post('/books', [BookController::class, 'create']); // Ensure the method exists
Route::get('/books/index', [BookController::class, 'index'])->name('book.create');
