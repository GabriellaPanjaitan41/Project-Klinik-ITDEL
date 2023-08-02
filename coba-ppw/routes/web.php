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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/', function () {
//     return view('employee_info');
// });

// Route::get('/', function () {
//     return view('medical_info');
// });

// Route::get('/', function () {
//     return view('patient_info');
// });
