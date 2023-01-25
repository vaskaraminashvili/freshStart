<?php

use App\Http\Controllers\Admin\DummyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::resource('dummies', DummyController::class);

Route::post('/get-data-fromModel', function (Request $request) {
    $validated = $request->validate([
        'model' => 'required',
        'field' => 'required',
        'where' => 'sometimes|array:column,operator,value',
    ]);
//    $column, $operator = null, $value = null,
    $model_name = 'App\Models\\' . \Str::ucfirst($validated['model']);
    $data = $model_name::when($validated['where'], function ($query) use ($validated) {
        return $query->where($validated['where']['column'], $validated['where']['operator'], $validated['where']['value']);
    })->orderBy('id')->get()->pluck('name', $validated['field']);

    return $data;
});


// Route::prefix('dummies')->name('dummies.')->group(function () {
//     Route::resource('index', [DummyController::class, 'index'])->name('index');
//     Route::get('index', [DummyController::class, 'index'])->name('index');
//     Route::get('plugins', [DummyController::class, 'plugins'])->name('plugins');
//     Route::get('edit', [DummyController::class, 'edit'])->name('edit');
// });
