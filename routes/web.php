<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
    // return redirect('home');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');;
// Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
// Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
// Route::post('/profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
// Route::get('/profile/delete', [App\Http\Controllers\ProfileController::class, 'delete'])->name('profile.delete');
///////////////////////////////
// Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create')->middleware('verified');;
Route::post('/profile/store', [ProfileController::class, 'store'])->name('profile.store')->middleware('verified');;
Route::get('/profile/{token}', [ProfileController::class, 'show'])->name('profile.show');
// Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('verified');;
// Route::post('/profile/{id}/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('verified');;


// Route::resource('profile',ProfileController::class)->middleware('verified');

// Last Route For error
Route::fallback(function(){
    return view("404/404");
});