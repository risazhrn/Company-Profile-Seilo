<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
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

Route::prefix('blog')->name('blog.')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{blog:slug}', 'show')->name('detail');
});

Route::prefix('program')->name('program.')->controller(ProgramController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});

Route::get('/about', function () {
    return view('about-us');
})->name('about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {

        Route::prefix('blog')->controller(BlogController::class)->name('blog.')->group(function () {
            Route::get('/', 'indexAdmin')->name('index');
            Route::get('/add', 'create')->name('create');
            Route::post('/', 'store')->name('store');
        });

        Route::prefix('program')->name('program.')->controller(ProgramController::class)->group(function () {
            Route::get('/', 'indexAdmin')->name('index');
            Route::get('/add', 'create')->name('create');
            Route::post('/', 'store')->name('store');
        });

        Route::get('/users', function () {
            return view('admin.user.index');
        })->name('admin.users');

    });
});

require __DIR__ . '/auth.php';
