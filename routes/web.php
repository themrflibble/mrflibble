<?php

use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\WebController;
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

/*
 *  laravel-best-practices & LWK says
 *  Route should be plural kebab case
 *  Name should be kebab-case with dot notation
 */

Route::get('/spare-time', [WebController::class, 'spareTime'])->name('spare-time');
Route::get('/work', [WebController::class, 'work'])->name('work');

Route::get('/', [WebController::class, 'home'])->name('home');
