<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website;
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




// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [Website::class, "index"]);
// Route::get('/', 'website@index');
Route::get('/add',[Website::class, "addData"]);
Route::get('/addData', 'website@addData');
// Route::post('/', 'website@addProcess');
