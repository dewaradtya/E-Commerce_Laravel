<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\AuthController;


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

// Route::get('/', function () {
//     return view('home');
// });


Route::get('/', [NavController::class, 'home'])->name('home');
Route::get('/products', [NavController::class, 'products'])->name('products');
Route::get('/about', [NavController::class, 'about'])->name('about');
Route::get('/contact', [NavController::class, 'contact'])->name('contact');
Route::get('/search', [NavController::class, 'search'])->name('search');
Route::get('/auth/register', [NavController::class, "register"])->name('auth.register');

Route::get('/auth/login', [NavController::class, "login"])->name('auth.login');
Route::post('/doLogin', [AuthController::class, "doLogin"])->name('doLogin');
Route::post('/doLogout', [AuthController::class, "doLogout"])->name('doLogout');

Route::get("/sample", [AuthController::class, "createSample"])->name('createSample');

Route::post('/do-register', [AuthController::class, "doRegister"])->name('doRegister');