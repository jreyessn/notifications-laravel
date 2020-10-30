<?php

use App\Models\Society;
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

// Route::get('/', 'Controller');

Route::get('/', function () {
   return view('welcome');
});

Route::get('/excel', function () {
   $societies = Society::all();

   return view('exports.sap_excel', compact('societies'));
});

