<?php

use App\Http\Controllers\FormulaireController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', [FormulaireController::class, 'getForm'])->name('getForm');
Route::post('/inscription', [FormulaireController::class, 'postForm'])->name('postForm');
Route::get('/inscription/list', [FormulaireController::class, 'getList'])->name('list');