<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/reviews/user', 'App\Http\Controllers\ContactController@allReview')->name('reviews_user');
Route::get('/reviews/{id}', 'App\Http\Controllers\ContactController@oneReview')->name('review-data-one');

Route::middleware('auth')->group(function(){
  Route::get('/user', function () {
      return view('user');
  })->name('user');

  Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
  Route::post('/user/submit', 'App\Http\Controllers\ContactController@submit')->name('order-form');
  Route::get('/user/all', 'App\Http\Controllers\ContactController@allData')->name('order-data');
  Route::get('/user/all/{id}', 'App\Http\Controllers\ContactController@oneMessage')->name('order-data-one');
  Route::get('/user/all/{id}/update', 'App\Http\Controllers\ContactController@update')->name('order-update');
  Route::post('/user/all/{id}/update', 'App\Http\Controllers\ContactController@update_submit')->name('order-update-submit');
  Route::get('/user/all/{id}/delete', 'App\Http\Controllers\ContactController@delete')->name('order-delete');
  Route::post('/reviews_process', 'App\Http\Controllers\ContactController@review_submit')->name('review_process');
});



Route::middleware('guest')->group(function(){

  Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
  Route::post('/login_process', [App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
  Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
  Route::post('/register_process', [App\Http\Controllers\AuthController::class, 'register'])->name('register_process');
});

Route::post('/', 'App\Http\Controllers\ContactController@callback')->name('callback');
