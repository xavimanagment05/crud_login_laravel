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
//jaser.com = Route :: get('/',function)/conocida como Closure
//jaser.com = Route :: get('contacto',function)

//App::setlocale('es');



Route::view('/','home')->name('home');
Route::view('/quienessomos','about')->name('about');

Route::resource('portafolio','ProjectController')
->parameters(['portafolio' => 'projects'])
->names('projects');


Route::view('/contacto','contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');
//Route::resource('projects','PortfolioController')->only(['index','show']);
//Route::resource('projects','PortfolioController')->except(['index','show']);

Auth::routes(['register' => false ]);


