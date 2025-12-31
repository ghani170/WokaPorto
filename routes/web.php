<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;


route::get('/', [PortoController::class, 'index']);


route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
route::post('/login', [AuthController::class, 'login'])->name('login');

route::get('/home', [PortoController::class, 'index'])->name('home');
route::get('/show/portofolio/{id}', [PortoController::class, 'show'])->name('show.portofolio');
route::get('/show/all-portofolio', [PortoController::class, 'showAll'])->name('show.all.portofolio');


Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('project', ProjectController::class);
    Route::resource('resource', ResourceController::class);
    Route::resource('layanan', LayananController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});