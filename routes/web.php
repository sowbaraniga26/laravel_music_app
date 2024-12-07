<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/services', [HomeController::class, 'services'])->name('home.services');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');


// Route::get('/login', [AuthController::class, 'login'])->name('home.login')->middleware('guest');
// Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('home.authenticate');
// Route::get('/profile',[AuthController::class, 'profile'])->name('home.profile')->middleware('auth');
// Route::get('logout',[AuthController::class, 'logout'])->name('home.logout')->middleware('auth');
// Route::get('/register',[AuthController::class, 'register'])->name('home.register')->middleware('guest');
// Route::post('/store', [AuthController::class, 'store'])->name('home.store');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('home.login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('home.authenticate');
    Route::get('/register', [AuthController::class, 'register'])->name('home.register');
    Route::post('/store', [AuthController::class, 'store'])->name('home.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile'])->name('home.profile');
    Route::get('/logout', [AuthController::class, 'logout'])->name('home.logout');
});
