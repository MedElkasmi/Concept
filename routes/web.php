<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Section\DescController;
use App\Http\Controllers\Section\AboutController;
use App\Http\Controllers\Section\MenuController;
use App\Http\Controllers\Section\ServiceController;
use App\Http\Controllers\blog\CategoryController;
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

Route::get('/section', function () {
    return view('admin.section');
})->name('admin.section');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(MenuController::class)->group(function () {
    Route::post('/section/menu', 'update')->name('menu.store');;
});

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(DescController::class)->group(function () {
    Route::post('/section/desc', 'update')->name('desc.store');
});

Route::controller(AboutController::class)->group(function () {
    Route::post('/section/about', 'update')->name('about.store');
});

Route::controller(ServiceController::class)->group(function () {
    Route::post('/section/service', 'store')->name('service.store');
});

Route::resource('category', CategoryController::class);




require __DIR__.'/auth.php';
