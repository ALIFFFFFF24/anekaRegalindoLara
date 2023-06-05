<?php

use App\Http\Controllers\FacilitiesController;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\OutdoorController;
use App\Http\Controllers\OutdoorsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RattanController;
use App\Http\Controllers\WoodController;
use App\Http\Controllers\WoodsController;
use App\Http\Controllers\RattansController;
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
  
Route::get('/', [ProfileController::class, 'index'])->name('home');
Route::get('/wood', [WoodController::class, 'index'])->name('wood');
Route::get('/rattan', [RattanController::class, 'index'])->name('rattan');
Route::get('/outdoor', [OutdoorController::class, 'index'])->name('outdoor');
Auth::routes();
  
Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('materials', MaterialController::class);
    Route::resource('homes', HomeController::class);
    Route::resource('woods', WoodsController::class);
    Route::resource('rattans', RattansController::class);
    Route::resource('outdoors', OutdoorsController::class);
    Route::resource('facilities', FacilitiesController::class);
});