<?php

use App\Http\Controllers\PosController;
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
    return view('home', ["title" => "Home"]);
});

//Suplier Routes
Route::get('/suplier', [PosController::class, 'indexSuplier']);
Route::get('/suplier/create', [PosController::class, 'createSuplier']);
Route::post('/suplier', [PosController::class, 'storeSuplier']);


//Customer Routes
Route::get('/customer', [PosController::class, 'indexCustomer']);
Route::post('/customer', [PosController::class, 'storeCustomer']);
Route::get('/customer/create', [PosController::class, 'createCustomer']);

//Barang Routes
Route::get('/barang', [PosController::class, 'indexBarang']);
Route::post('/barang', [PosController::class, 'storeBarang']);
Route::get('/barang/create', [PosController::class, 'createBarang']);

//PO Routes
Route::get('/purchase', [PosController::class, 'createPo']);
Route::get('/reportPo', [PosController::class, 'indexPo']);
Route::post('/purchase', [PosController::class, 'storePo']);


//SO Routes
Route::get('/reportSo', [PosController::class, 'indexSo']);
Route::get('/sales/create', [PosController::class, 'createSo']);
Route::post('/sales', [PosController::class, 'storeSo']);
