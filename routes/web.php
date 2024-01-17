<?php

use App\Http\Controllers\CustomerController;
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

Route::get('/form', [CustomerController::class, 'index']);
Route::patch('/form', [CustomerController::class, 'store']);
Route::get('/form/editall',[CustomerController::class, 'index'])->name('form.editall');
Route::get('/form/edit/{customer}',[CustomerController::class, 'show'])->name('form.edit');
Route::put('/form/edit/{customer}',[CustomerController::class, 'update'])->name('form.edit.put');
Route::delete('/form/edit/{customer}', [CustomerController::class,'destroy'])->name('form.edit.destroy');
