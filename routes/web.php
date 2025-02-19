<?php

use App\Http\Controllers\court_typeController;
use App\Http\Controllers\courtController;
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

//route::get('/master', function(){
  //  return view ('master');
  //  });

    route::get('/mproject', function(){
        return view ('mproject');
        });
    
        route::get('/service', function(){
            return view ('service');
            });

            route::get('/court_type', [court_typeController::class, 'index']);
            route::get('/court', [courtController::class, 'index']);
            route::post('/court_type', [court_typeController::class, 'store']);

            route::resource('court', courtController::class);

            ?>