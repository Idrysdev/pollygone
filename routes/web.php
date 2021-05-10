<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;


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
});

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function (){
Route::get('/dashboard', function(){return view('admin.dashboard'); })->name('home');
Route::resource('accounts', AccountController::class);
Route::resource('role', RoleController::class);
// resources::('/');

});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
