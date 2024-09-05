<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
=======
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
>>>>>>> 40229868778f3d3318b056bee3996e566ccecca6


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

Route::get('/', [HomeController::class,'home']);
<<<<<<< HEAD
Route::prefix('category')->group(function (){
    Route::get('/food_beverages', [ProductsController::class,'food_beverages']);
    Route::get('/beauty_health', [ProductsController::class,'beauty_health']);
    Route::get('/home_care', [ProductsController::class,'home_care']);
    Route::get('/baby_kid', [ProductsController::class,'baby_kid']);
});
Route::get('/user/{id}/name/{name}', [UserController::class,'user']);
Route::get('/penjualan', [PenjualanController::class,'penjualan']);


=======
Route::get('/hello',[WelcomeController::class,'hello']);
Route::get('/world', function () {    return 'World'; 
}); 
Route::get('/about', [aboutController::class,'about']);

Route::get( '/user/{name}', function ($name) { return 'Nama saya '.$name; });
Route::get('/posts/{post}/comments/{comment}' , function ($postId, $commentId){
    return 'Pos ke - ' .$postId."Komentar ke-:".$commentId ;
});
Route::get('/articles/{id}' ,[ArticleController::class,'articles']);

Route::get( '/user/{name?}', function ($name = 'John') { return 'Nama saya '.$name; });
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only(['index','show']);
Route::resource('photos', PhotoController::class)->except(['create','store','update',]);

Route::get('/greeting', [WelcomeController::class,'greeting']);
>>>>>>> 40229868778f3d3318b056bee3996e566ccecca6
