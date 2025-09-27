<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;



Route::get('/',[TodoController::class,'index'])->name('todos.index');
Route::get('/todos/create',[TodoController::class,'create'])->name('todos.create');
Route::post('/todos',[TodoController::class,'store'])->name('todos.store');
Route::get('/todos/{todo}',[TodoController::class,'show'])->name('todos.show');
Route::get('/todos/{todo}/completed',[TodoController::class,'completed'])->name('todos.completed');
Route::get('/todos/{todo}/edit',[TodoController::class,'edit'])->name('todos.edit');
Route::put('/todos/{todo}',[TodoController::class,'update'])->name('todos.update');
Route::delete('/todos/{todo}',[TodoController::class,'destroy'])->name('todos.destroy');



// Category route
Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
Route::get('/categories/{category}/edit',[CategoryController::class,'edit'])->name('categories.edit');
Route::put('/categories/{category}',[CategoryController::class,'update'])->name('categories.update');
Route::delete('/categories/{category}',[CategoryController::class,'destroy'])->name('categories.destroy');
