<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DistributorController;

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
    return view('Login');
});


// 
Route::post('login', [HomeController::class, 'login'])->name('login');

Route::get('logout',function(){
    Auth::logout();
    return redirect('/');
});



// Route::get('dealers','App\Http\Controllers\DealerController@index');


Route::get('/home', [HomeController::class, 'index'])->name('home');

// Roles
Route::resource('roles', App\Http\Controllers\RolesController::class);


Route::get('/distributors', [DistributorController::class, 'index'])->name('distributor.index');
Route::get('/distributors_add', [DistributorController::class, 'addDistributor'])->name('distributor.create');