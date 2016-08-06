<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('index');
});
Route::get('admin-panel', 'AdminPanelController@dashboard');
Route::get('ver-proyectos', 'HomeController@verProyectos');
Route::get('contacto', 'HomeController@contacto');

Route::auth();


