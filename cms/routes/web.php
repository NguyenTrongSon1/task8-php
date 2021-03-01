<?php

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
Route::get('profile/{name}','ProfileController@showProfile');
Route::get('home','HomeController@showWelcome');
Route::get('about','AboutController@showDetails');
Route::get('/', function () {
    return view('welcome');
});

Route::get('about',function(){
    return 'about content';
});

Route::get ('about/directions',function (){
    return 'Directions go here';
});

Route::any('submit-form',function (){
    return 'Process Form';
});
Route::get('about/{theSubject}',function ($theSubjetc){
    return $theSubjetc. ' content goes here';
});
Route::get('about/{ART}/{rice}',function ($ART,$price){
    return "$ART and $price";
});
Route::get('where',function (){
    return Redirect('about/directions');
});

