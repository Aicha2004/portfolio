<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProjectController::class, 'index'])->name('home');

// Portfolio Index Route (This shows the list of portfolio items)
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

// Portfolio Details Route (This shows the details of a single portfolio item)
Route::get('/portfolio/{id}', [PortfolioController::class, 'details'])->name('portfolio.details');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendContact'])->name('contact.send');