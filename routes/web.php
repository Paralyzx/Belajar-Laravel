<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function(){
    return view ('home');
    });

Route::get('/index', function(){
        return view ('index');
        });

// Route::get('/index/{id}', function($id){
//         return ('profik');
//         });

route::get('/master', function(){
    return view ('master');
    });

    route::get('/mproject', function(){
        return view ('mproject');
        });
    