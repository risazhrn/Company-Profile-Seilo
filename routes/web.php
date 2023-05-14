<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('homepage');
})->name('home');

Route::prefix('blog')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('blog');
    Route::get('/{slug}', 'show')->name('blog.detail');
});

Route::get('/about', function () {
    return view('about-us');
})->name('about');
Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->group(function () {
        Route::prefix('blog')->controller(BlogController::class)->group(function () {
            Route::get('/', 'indexAdmin')->name('admin.blog');
            Route::get('/add', 'create')->name('admin.blog.create');
            Route::post('/', 'store')->name('admin.blog.store');
        });

        Route::get('/program', function () {
            return view('admin.program.index');
        })->name('admin.program');
        Route::get('/program/add', function () {
            return view('admin.program.create');
        })->name('admin.program.create');
        Route::get('/program/edit', function () {
            return view('admin.program.edit');
        })->name('admin.program.create');

        Route::get('/users', function () {
            return view('admin.user.index');
        })->name('admin.users');
    });
});

require __DIR__ . '/auth.php';
