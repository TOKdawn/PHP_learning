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

Route::get('zzpy',function () {

    return view('zpy')->with('name','DawninShadow');
});
Route::get('zpy',function () {
    $data = [
        'name' => 'dawninshadow'
    ];
    return view('zpy',$data);
});
Route::get('zzzpy',function () {
   $name = 'dawninShadow';
    return view('zpy', compact('name'));
});
Route::get('about','MyController@getAbout');
Route::get('blade',function(){
    $data = [
        'name' => 'dawninshadow',
        'age' => 24,
        'love' => null
    ];
    return view('blade',$data);
});
Route::get('{number}',function($number){
    return view('home ',$number);
});