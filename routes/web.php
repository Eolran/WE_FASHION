<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;

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

///////// //Guest Routes
Route::get('/', [ProductController::class, 'list'])->name("home");
Route::get('/product/{id}', [ProductController::class, 'show']);

///////// //Admin Routes
Route::get('/admin', [ProductController::class, 'listAdmin'])->name("admin");

//{Admin} Delete a product
Route::delete('/admin/delete/{id}', [ProductController::class, 'deleteAdmin']);

//{Admin} Update a product
Route::get('/admin/edit/{id}', [ProductController::class, 'formEditAdmin']);
Route::put('/admin/update/{id}', [ProductController::class, 'updateAdmin']);

//{Admin} Create a product
Route::get('/admin/add', [ProductController::class, 'addAdmin']);
Route::post('/admin/create', [ProductController::class, 'createAdmin']);

// {Login} Admin login and redirect
Route::get('/login', [LoginController::class, 'show'])->name("auth.login");
Route::post('/login', [LoginController::class, 'login']);
Route::delete('/logout', [LoginController::class, 'logout'])->name("auth.logout");