<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('index');
});

Route::get('/users', [HomeController::class,'index']);
Route::get('/module1', [HomeController::class,'module1'])->name('module1');
Route::get('/module2', [HomeController::class,'module2'])->name('module2');
Route::post('/create-user',[HomeController::class,'createUser'])->name('create.user');
Route::post('/create-user2',[HomeController::class,'createUser2'])->name('create.user2');
