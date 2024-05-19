<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cruds_controller;

Route::get('/insert', function () {
    return view('welcome');
});

// View Data

Route::get('/insert/show', function () {
    return view('show'); // Return Page View
});

// Retrieve Data
Route::get('/insert/show', [cruds_Controller::class, 'index']);

// Insert the Data
Route::post('/store', [cruds_controller::class, 'store'])->name('store');

// Delete the Data
Route::delete('/delete/{id}', [cruds_controller::class, 'destroy'])->name('destroy');

// Update the Data
Route::get('/update/{id}', [cruds_controller::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [cruds_controller::class, 'update'])->name('update');


