<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\PluginController;

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

Route::prefix('plugins')->group(function () {
    Route::get('plugins', [PluginController::class, 'plugins']);
    Route::get('index', [PluginController::class, 'index']);
    Route::get('edit', [PluginController::class, 'edit']);
});