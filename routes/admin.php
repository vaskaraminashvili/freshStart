<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\DummyController;

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



Route::get('/', function () {
    // sleep(3);
    return Inertia::render('@.welcome', [
        'test' => 'test me '
    ]);
})->name('welcome');


Route::get('/about', function () {
    return Inertia::render('@.about', [
        'test' => 'test me '
    ]);
})->name('about');

Route::prefix('dummies')->name('dummies.')->group(function () {
    Route::get('index', [DummyController::class, 'index'])->name('index');
    Route::get('plugins', [DummyController::class, 'plugins'])->name('plugins');
    Route::get('edit', [DummyController::class, 'edit'])->name('edit');
});