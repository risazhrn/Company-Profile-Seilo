<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UserController;
use App\Models\Program;
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
    $programs = Program::where('aktif', true)->limit(3)->get();
    return view('homepage', compact('programs'));
})->name('home');

Route::prefix('blog')->name('blog.')->controller(BlogController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{blog:slug}', 'show')->name('detail');
});

Route::prefix('program')->name('program.')->controller(ProgramController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{program}', 'show')->name('show');
});

Route::get('/about', function () {
    return view('about-us');
})->name('about');

Route::get('/dashboard', function () {
    if (Auth::user()->role === 2) {
        return redirect('/');
    }
    return to_route('profile.edit');
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->middleware('role:0,1')->name('admin.')->group(function () {

        Route::prefix('blog')->controller(BlogController::class)->name('blog.')->group(function () {
            Route::get('/', 'indexAdmin')->name('index');
            Route::get('/add', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/edit/{blog}', 'edit')->name('edit');
            Route::put('/{blog}', 'update')->name('update');
            Route::delete('/{blog}', 'destroy')->name('destroy');
        });

        Route::prefix('program')->name('program.')->controller(ProgramController::class)->group(function () {
            Route::get('/', 'indexAdmin')->name('index');
            Route::get('/add', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/edit/{program}', 'edit')->name('edit');
            Route::put('/{program}', 'update')->name('update');
        });

        Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/add', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/edit/{user}', 'edit')->name('edit');
            Route::put('/{user}', 'update')->name('update');
        });

    });
});

require __DIR__ . '/auth.php';
