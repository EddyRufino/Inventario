<?php

use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->name('dashboard');

Route::resource('products', ProductController::class);

Route::get('/', function () {
    return Inertia::render('Auth/login');
});

//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard.dos');

require __DIR__.'/auth.php';
