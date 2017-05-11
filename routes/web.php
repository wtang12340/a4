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

//Main page
Route::get('/', 'PokeController@poke');

//Page with pokemon listed
Route::get('/read','PokeController@read');

//Page with form to let you create a pokemon for Oak to hand out
Route::get('/create','PokeController@create');

//Page that confirms the pokemon is added and lets you add another
Route::get('/execute','PokeController@executeCreation');

//Page with trainers listed
Route::get('/readTrainers','PokeController@readTrainers');

//Page that relist the pokemon after giving Will all of Oak's pokemon
Route::get('/giveWill','PokeController@giveWill');

//Page that relist the pokemon after giving Dawn all of Oak's pokemon
Route::get('/giveDawn','PokeController@giveDawn');

//Release all the pokemon Will and Dawn owns
Route::get('/release','PokeController@release');
