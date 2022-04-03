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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


    ################## Begin Admin Route  ####################

route::group(['namespace'=>'Admin'],function(){

    route::get('admin','AdminController@admin')->name('admin');//->middleware('role:superadministrator')


});

    ################## End Admin Route  ########################





    ################## Begin User Route  #######################


route::group(['namespace'=>'User'],function(){


    route::get('user','UserController@user')->name('user');//->middleware('role:user|superadministrator')



});

    ################## End User Route ########################


//////////////////////////Begin Engineering /////////////////

route::group(['namespace'=>'Engineering'],function(){

route::get('index','ControllerEngineering@index');

});

////////////////////////// End Engineering /////////////////
