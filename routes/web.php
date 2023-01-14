<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LiveSearchController;
use App\Http\Controllers\CustomAuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


    Route::get('/', [LiveSearchController::class, 'livesearch']);
    Route::get('/action', [LiveSearchController::class, 'action'])->name('action');
    Route::get('/', [CustomAuthController::class, 'home']);
    Route::get('livesearch', [CustomAuthController::class, 'livesearch']);
    Route::get('login', [CustomAuthController::class, 'index'])->name('login');
    Route::post('postlogin', [CustomAuthController::class, 'login'])->name('postlogin');
    Route::get('signup', [CustomAuthController::class, 'signup'])->name('register-user');
    Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

