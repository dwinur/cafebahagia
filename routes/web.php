<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MasterProductController;
use App\Http\Controllers\MasterTransactionController;
use App\Models\MasterProduct;

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
    return view('master_products.index');
});

Route::get('/master_products', [MasterProductController::class, 'index']);
Route::get('/master_products/create', [MasterProductController::class, 'create'])->name('master_products.create');
Route::resource('/master_products', MasterProductController::class);
Route::get('/master_transactions', [MasterTransactionController::class, 'index'])->name('master_transactions.index');
Route::post('/master_transactions', [MasterTransactionController::class, 'store'])->name('master_transactions.store');
Route::get('/master_transactions/list', [MasterTransactionController::class, 'showList'])->name('master_transactions.list');