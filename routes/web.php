<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'welcome']);

Route::get('/welcome', [MainController::class, 'welcome']);

Route::get('/container', [MainController::class, 'container']);

Route::get('/prokopenko', [MainController::class, 'prokopenko']);
Route::get('/melnyk', [MainController::class, 'melnyk']);
Route::get('/shpuryk', [MainController::class, 'shpuryk']);
Route::get('/protsenko', [MainController::class, 'protsenko']);
Route::get('/kviten', [MainController::class, 'kviten']);
Route::get('/yalovenko', [MainController::class, 'yalovenko']);

Route::post('/callback', [MainController::class, 'callback']);
