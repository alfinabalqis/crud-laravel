<?php

use App\Http\Controllers\EmployeeListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
   

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
    return view('welcome');
});

// Route::get('/items', function () {
//     return view('items');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('items', [ItemController::class, 'index']) -> name('items');

// User
Route::get('users', [UserController::class, 'index'])->name('users.index')->middleware(['auth']);
Route::post('users/store', [UserController::class, 'store'])->name('users.store');
Route::get('users/edit/{id}/', [UserController::class, 'edit']);
Route::post('users/update', [UserController::class, 'update'])->name('users.update');
Route::get('users/destroy/{id}/', [UserController::class, 'destroy']);
require __DIR__.'/auth.php'; 
