<?php

use App\Http\Controllers\menuController;
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

Route::get('/', [menuController::class , 'index']);
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/dashboard/menu', function () {
    return view('admin.menu');
});

