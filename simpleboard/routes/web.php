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
//Route::get('morning',function(){    return '<html><body><h1>Good Morning</h1><p>My name is Yuki</p></body></html>';});
//Route::get('hello',function(){ return '<html><body><h1>hello</h1><p>My name is Yuki</p></body></html>';});
Route::get('hello','HelloController@index');
Route::get('morning','HelloController@ondex');
Route::get('home','MyController@home');
Route::get('zikosyoukai','MyController@self');
Route::get('otoiawase','MyController@help');
Route::post('otoiawase','MyController@store');
Route::get('score',function (){
    return view('score');
});
Route::post('testform','WorkController@work');
Route::get('total',function(){
    return view('total');
});
Route::post('testform2','WorkController@homework');
Route::get('number',function () {
    return view('number');
});
Route::post('testform3','WorkController@assignment');