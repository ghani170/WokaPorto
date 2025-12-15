<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
});

route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
route::post('/login', [AuthController::class, 'login'])->name('login');

route::get('/home', [PortoController::class, 'index'])->name('home');
route::get('/show/portofolio/{id}', [PortoController::class, 'show'])->name('show.portofolio');


Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('project', ProjectController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});