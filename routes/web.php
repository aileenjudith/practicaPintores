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

Route::get ('/plantilla', [
    'uses'=> 'Pintoresc@menu',
    'as'=> 'menu principal']);

Route::get ('/pintor1', [
    'uses'=> 'Pintoresc@pintorone',
    'as'=> 'Pierre.Auguste']);

Route::get ('/pintor2', [
    'uses'=> 'Pintoresc@pintortwo',
    'as'=> 'Pedro.Pablo.Rubens']);

Route::get ('/pintor3', [
    'uses'=> 'Pintoresc@pintortres',
    'as'=> 'Max.Ernst']);

Route::get ('/pintor4', [
    'uses'=> 'Pintoresc@pintorfor',
    'as'=> 'Henri.Rousseau']);

Route::get ('/pintor5', [
    'uses'=> 'Pintoresc@pintorfive',
    'as'=> 'Vincent.Van.Gogh']);