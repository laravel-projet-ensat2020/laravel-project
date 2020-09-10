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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pg1','artcontroller@afficher_produit');
Route::get('/pg2','artcontroller@ajouter_produit');
Route::get('/pg3','artcontroller@ajou_produit_bd');
Route::get('/prd1','artcontroller@prd_portable');
Route::get('/prd2','artcontroller@prd_ordinateur');
Route::get('/prd3','artcontroller@prd_machine');
Route::get('/produit','artcontroller@all_produit');
Route::get('pg8/{id}','artcontroller@acheter');
Route::get('/pg9/{id}','artcontroller@save_commande');
Route::get('/pg11','artcontroller@afficher_facture');
Route::get('/pg13/{id}','artcontroller@changer');
Route::get('/pg16/{id}','artcontroller@enregistrer_chang');
Route::get('/pg14','artcontroller@commande');
Route::get('/pg15/{id}','artcontroller@commande1');
Route::get('/pg12/{id}','artcontroller@delete_commande');
Route::get('/pg17/{id}','artcontroller@delete_produit');