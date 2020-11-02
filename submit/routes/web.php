<?php

use App\Http\Controllers\CobaController;
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


// root
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('profil', 'CobaController@loadProfil');

Route::get('biodata', 'BiodataController@index');

Route::get('/','MahasiswaController@home', );

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswaeq', 'Mahasiswaeq@index');
Route::get('/tambahmahasiswa', 'Mahasiswaeq@create');
Route::post('/mahasiswaeq', 'Mahasiswaeq@store');
Route::post('/mahasiswaeq/{mahasiswaeqmodel}', 'Mahasiswaeq@destroy');
Route::get('/mahasiswaeq/{mahasiswaeqmodel}', 'Mahasiswaeq@show');
Route::patch('/mahasiswaeq/{mahasiswaeqmodel}', 'Mahasiswaeq@update');
Route::get('/mahasiswaeq/{mahasiswaeqmodel}/edit', 'Mahasiswaeq@edit');
