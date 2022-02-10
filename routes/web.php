<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome', ["title" => "Welcome",]);
});

Auth::routes();

Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get('auth/facebook', [App\Http\Controllers\FacebookController::class, 'redirectToFacebook'])->name('facebook.login');
Route::get('auth/facebook/callback', [App\Http\Controllers\FacebookController::class, 'handleFacebookCallback'])->name('facebook.callback');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{article:slug}', [App\Http\Controllers\ArticleController::class, 'show']);
Route::get('/videos', [App\Http\Controllers\VideoController::class, 'index'])->name('videos');
Route::get('/videos/{video:slug}', [App\Http\Controllers\VideoController::class, 'show']);
Route::get('/membership', [App\Http\Controllers\MembershipController::class, 'index'])->name('membership');
Route::put('/membership/{id}', [App\Http\Controllers\MembershipController::class, 'upgrade'])->name('membership.upgrade');
