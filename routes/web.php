<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Admin;
use App\Http\Controllers\AdminController;

Route::get('/', [ReportController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::delete('/reports/{report}', [ReportController::class, 'destroy']) -> name('reports.destroy');
    Route::post('/store', [ReportController::class, 'store'])->name('reports.store');
    Route::get('/create', [ReportController::class, 'create'])->name('reports.create');
});

Route::middleware((Admin::class))->group(function(){
    Route::get('/admin', [AdminController::class, 'index']) -> name('admin.index');
    Route::put('/update', [ReportController::class, 'update'])->name('reports.update');
});

require __DIR__.'/auth.php';
