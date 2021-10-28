<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArsipController;

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
    return view('auth/login');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
        return view('home', ['users' => User::get(),]);
    });
    Route::resource('user', UserController::class);

});

Route::resource('arsip', ArsipController::class);
Route::get('/profile', function(){
    return view('/profile');
});

// Route::get('/table',[ArsipController::class, 'index']);
// Route::post('/create',[ArsipController::class, 'store']);

