<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolesController;

use App\Http\Controllers\DistributorController;
use App\Http\Controllers\DealerController;


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



Route::get('roles.index', function () {
    return view('roles.index');
});

// Route::get('roles.edit', function () {
//     return view('roles.edit/{id}')->name('edit');
// });

 Route::get('roles.edit',[RolesController::class, 'edit'])->name('edit');


// Route::get('dealers','App\Http\Controllers\DealerController@index');


Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::post('Set_Roles', [RolesController::class, 'SetRoles'])->name('Set_Roles');



// Roles
Route::resource('roles', App\Http\Controllers\RolesController::class);


Route::get('/users', [HomeController::class, 'userslist'])->name('users.index');


Route::get('/distributors', [DistributorController::class, 'index'])->name('distributor.index');
Route::get('/distributors_add', [DistributorController::class, 'addDistributor'])->name('distributor.create');
Route::post('/Add_Distributor', [DistributorController::class, 'Add_Distributor'])->name('Add_Distributor');
Route::get('/dist_approve/{id}', [DistributorController::class, 'dist_approve'])->name('dist_approve');




Route::get('/dealers', [DealerController::class, 'index'])->name('dealer.index');
Route::get('/dealers_add', [DealerController::class, 'addDealer'])->name('dealer.create');
Route::post('/Add_Dealer', [DealerController::class, 'Add_Dealer'])->name('Add_Dealer');
Route::get('/dealer_approve/{id}', [DealerController::class, 'dealer_approve'])->name('dealer_approve');






