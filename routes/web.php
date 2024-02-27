<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentsController;
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

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/home', function () {
    return view("home", [
        "title" => "Home"
    ]);
});

Route::group(['prefix' => 'student'], function(){
    Route::get('/all', [StudentsController::class, 'index']);
    Route::get('/detail/{student}', [StudentsController::class, 'show']);
    Route::get('/create', [StudentsController::class, 'create']);
    Route::post('/add', [StudentsController::class, 'store']);
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
    Route::get('/edit/{student}', [StudentsController::class, 'edit']);
    Route::post('/update/{student}', [StudentsController::class, 'update']);
});

Route::group(['prefix' => 'class'], function(){
    Route::get('/all', [ClassController::class, 'index']);
    Route::get('/create', [ClassController::class, 'create']);
    Route::post('/add', [ClassController::class, 'store']);
    Route::delete('/delete/{kelas}', [ClassController::class, 'destroy']);
    Route::get('/edit/{kelas}', [ClassController::class, 'edit']);
    Route::post('/update/{kelas}', [ClassController::class, 'update']);
});

Route::get('/about', [AboutController::class, 'index']);

Route::group(['prefix' => 'auth'], function(){
    Route::get('/login-form', [AuthController::class, 'loginView'])->name('login')->middleware('guest');
    Route::get('/register-form', [AuthController::class, 'registerView'])->middleware('guest');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboard/{id}', [DashboardController::class, 'dashboard'])->middleware('auth');
    Route::get('/student', [DashboardController::class, 'student'])->middleware('auth');
    Route::get('/class', [DashboardController::class, 'kelas'])->middleware('auth');
});
