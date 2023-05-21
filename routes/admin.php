<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IndonesiaController;
use App\Http\Controllers\Admin\IndoWaropController;
use App\Http\Controllers\Admin\WaropenController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('admin.dashboard.index');
// })->name('admin');

Route::prefix('admin')
    ->middleware('auth', 'role:admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin');
        Route::resource('indonesia', IndonesiaController::class);
        Route::resource('waropen', WaropenController::class);
        Route::resource('indo_warop', IndoWaropController::class);
    });
