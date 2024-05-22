<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\Front_endController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebinarController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('home', HomeController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::resource('/', Front_endController::class);

Route::resource('profile', ProfileController::class);
Route::resource('interests', InterestController::class);
Route::resource('skills', SkillController::class);
Route::resource('experiences', ExperienceController::class);
Route::resource('webinars', WebinarController::class);
Route::resource('category', CategoryController::class);
Route::resource('education', EducationController::class);

// Route::middleware('auth:web')->group(function(){

// });

Route::middleware('role:admin')->group(function () {
  Route::resource('user', UserController::class);
  Route::resource('blogs', BlogController::class);
  Route::resource('contacts', ContactController::class);
  Route::resource('messages', MessageController::class);
 
});

// Route::middleware('role:spectator')->group(function () {
  
// });

