<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action : function () {
    return view(view: 'components.layout');
});

Route::get(uri: '/welcome', action: function () {
    return view(views : 'welcome');
});
Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories/create', 'create')->name('categories.create');
    Route::post('/categories', 'store')->name('categories.store');
    Route::get('/categories', 'index')->name('categories.index');
    Route::get('/categories/{category}', 'show')->name('categories.show');
    Route::get('/categories/{category}/edit', 'edit')->name('categories.edit');
    Route::put('/categories/{category}', 'update')->name('categories.update');
    Route::delete('/categories/{category}', 'destroy')->name('categories.destroy');
});

Route::controller(BookController::class)->group(function () {
    Route::get('/books/create', 'create')->name('books.create');
    Route::post('/books', 'store')->name('books.store');
    Route::get('/books', 'index')->name('books.index');
    Route::get('/books/{book}', 'show')->name('books.show');
    Route::get('/books/{book}/edit', 'edit')->name('books.edit');
    Route::put('/books/{book}', 'update')->name('books.update');
    Route::delete('/books/{book}', 'destroy')->name('books.destroy');
});



Route::get('/register/create', [RegisterController::class, 'create'])->name('register.create');
Route::get('/login', [LoginController::class, 'create'])->name('login.create');   
Route::post('/login', [LoginController::class, 'store'])->name('login.store'); 