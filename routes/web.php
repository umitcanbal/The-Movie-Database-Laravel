<?php

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
//bu diyo ki laravel.test'in sonuna hiçbi şey yazmazsan (bu durum = "/"), bunu yap                        
   
Route::get('/api', 'ApiController@index');

//bu diyo ki "get" methoduyla /api adresine gittiğinde ApiController'ın index methodunu çalıştır

Route::get("/top-movies", "MovieController@topMovies");

Route::get("/movie-of-the-week", "MovieController@movieOfTheWeek");