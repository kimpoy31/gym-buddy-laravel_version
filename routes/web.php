<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

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
})->name('home');

// Login
Route::get('/login', [AuthManager::class, 'login'])->name("login") ;
Route::post('/login', [AuthManager::class, 'loginPost'])->name("login.post");

// Registration
Route::get('/registration', [AuthManager::class, 'registration'])->name("registration");
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name("registration.post");

// My own summary and understanding ........................................
// AuthManager is the class in which contains the controllers
// [AuthManager::class] is the invocation and 'name' is the function to call in the class
// ->name("name"); "name" is used as a key or access name invoked on *.blade.php action forms