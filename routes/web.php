<?php

use App\Events\UserLog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestEnrollmentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProductController;
use Illuminate\Queue\Jobs\Job;

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

Route::get('/', [AuthController::class , 'loginForm'])->name('login');
Route::post('/',[AuthController::class, 'login']);
Route::get('/register', [AuthController::class , 'registerForm']);
Route::post('/register', [AuthController::class , 'register'])->name('register');
 Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);

Route::middleware(['auth','verified'])->group (function(){

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [AuthController::class, 'dashboard']);

    Route::get('/send-testenrollment', [TestEnrollmentController::class, 'sendTestNotification']);

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/logs', [LogController::class, 'index'])->name('logs.index');
});

  Route::get('/sendmail', [EmailController::class, 'sendEmail']);
