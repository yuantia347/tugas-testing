<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoanCalculatorController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\NilaiController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard');

Route::post('/item', [ItemController::class, 'insert'])->name('item.store');
Route::delete('/item/{id}', [ItemController::class, 'delete'])->name('item.destroy');

// Calculator
Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculator', [CalculatorController::class, 'calculate']);

// Loan
Route::get('/loan', [LoanCalculatorController::class, 'index']);
Route::post('/loan', [LoanCalculatorController::class, 'calculate']);


Route::get('/number', [NumberController::class, 'index']);
Route::post('/number/check', [NumberController::class, 'check']);


Route::get('/nilai', [NilaiController::class, 'index']);
Route::post('/nilai/hitung', [NilaiController::class, 'hitung'])->name('nilai.hitung');


