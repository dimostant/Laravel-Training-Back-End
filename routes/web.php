<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\TestStatus\Risky;

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

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/actions',function () {
    return view('actions');
});

Route::get('/notfound',function () {
    return view('notfound');
});

Route::get('/form', [CustomerController::class, 'index']);
Route::patch('/form', [CustomerController::class, 'store']);

Route::get('/form/edit',[CustomerController::class, 'index'])->name('form.editall');

Route::get('/form/edit/{customer}', [CustomerController::class, 'edit'])->name('form.edit');
Route::put('/form/edit/{customer}', [CustomerController::class, 'update'])->name('form.update');
Route::delete('/form/edit/{customer}', [CustomerController::class,'destroy'])->name('form.edit.destroy');
