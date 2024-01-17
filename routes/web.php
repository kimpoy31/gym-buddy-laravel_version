<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\WorkoutController;

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

// home
Route::get('/', [AuthManager::class, 'home'])->name('home');

// workout
Route::post('/', [WorkoutController::class, 'workoutPost'])->name("workout.post");
Route::get('/workout/{id}/edit', [WorkoutController::class, 'workout'])->name("workout.edit");
Route::patch('/workout/{id}/edit', [WorkoutController::class, 'workoutPatch'])->name("workout.patch");

// Login
Route::get('/login', [AuthManager::class, 'login'])->name("login") ;
Route::post('/login', [AuthManager::class, 'loginPost'])->name("login.post");

// Registration
Route::get('/registration', [AuthManager::class, 'registration'])->name("registration");
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name("registration.post");

// Logout
Route::get('/logout', [AuthManager::class, 'logout'])->name("logout");

// My own summary and understanding ........................................
// AuthManager is the class in which contains the controllers
// [AuthManager::class] is the invocation and 'name' is the function to call in the class
// ->name("name"); "name" is used as a key or access name invoked on *.blade.php action forms