<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StampController;

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

Route::get('/', [StampController::class, 'index']);
Route::post('/', [StampController::class, 'index']);
Route::get('/login', [StampController::class, 'login']);
Route::get('/register', [StampController::class, 'register']);