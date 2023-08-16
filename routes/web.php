<?php

use App\Http\Controllers\SesiController;
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

Route::get('/', [SesiController::class, 'index']);
Route::post('/', [SesiController::class, 'login']);

Route::get('/app/admin', function () {
    return view('admin_role'); 
})->middleware('auth');
Route::get('/app/user', function () {
    return view('user_role'); 
})->middleware('auth');
