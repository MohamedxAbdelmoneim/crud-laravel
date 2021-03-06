<?php

use App\Http\Controllers\CatController;
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



// this 2 routes for retreve data from the database
Route::get('/cats', [CatController::class, 'index']);
Route::get('cats/show/{id}', [CatController::class, 'show']);

// this 2 routes for insert data in the database 
Route::get('/cats/create', [CatController::class, 'create']);
route::post('cats/store',[CatController::class , 'store']);

// this 2 routes for update data in the database
Route::get('/cats/edit/{id}', [CatController::class, 'edit']);
Route::post('/cats/update/{id}', [CatController::class, 'update']);

// this 1 route for delete row from database 
Route::get('/cats/delete/{id}', [CatController::class, 'delete']);

