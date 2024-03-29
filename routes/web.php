<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\auth;
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
// product
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('products/{id}', [ProductController::class, 'show']);
// auth
Route::group(['middleware'=>'auth'], function(){
    Route::get('/', [ProductController::class, 'index'])->name('products.index');

}); 
// route::get('/registform', function(){
//     return view('auth.register');
// });
// route::get('/login', function(){
//     return view('auth.register');
// });
route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::get('/register', [LoginController::class, 'registration'])->name('register');
Route::post('/custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom');
Route::get('/logout', [LoginController::class, 'signOut'])->name('signout');
