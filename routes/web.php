<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'home'])->name('home');
Route::get('/book/scent-and-soul', [BookController::class, 'chapters'])->name('book.chapters');
Route::get('/book/scent-and-soul/chapter/{id}', [BookController::class, 'show'])->name('book.chapter');
