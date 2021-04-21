<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\ContactController;

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

Route::middleware('auth')->group(function(){

    Route::get('/posts',[PostController::class,'index'])->name('home');

    Route::post('/posts',[PostController::class,'store']);

});

Route::patch('/profiles/{user:username}',[ProfilesController::class,'update'])->middleware('can:edit,user');

Route::get('/profiles/{user:username}',[ProfilesController::class,'show'])->name('profile');

Route::get('/profiles/{user:username}/edit',[ProfilesController::class,'edit'])->middleware('can:edit,user');



Auth::routes();

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('contact-us', [ContactController::class,'getContact']);
Route::post('contact-us',  [ContactController::class,'saveContact']);

