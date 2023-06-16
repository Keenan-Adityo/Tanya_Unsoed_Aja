<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatroomController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CSController;
use App\Http\Controllers\UserLoginController;
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
    return view('login');
});

Route::get('/loginAdmin', function () {
    return view('loginAdmin');
});



Route::get('/test', function () {
    return view('welcome');
});


Route::get('/chatroom', ['middleware' => 'auth', ChatroomController::class, 'index']);
Route::post('/chatroom', [ChatroomController::class, 'sendMessage']);
Route::get('/customerService/{chatroom}', [CSController::class, 'index']);
Route::post('/customerService/{chatroom}', [CSController::class, 'sendtoUser']);
Route::get('/adminChatroom/{chatroom}', [AdminController::class, 'index']);
Route::post('/adminChatroom/{chatroom}', [AdminController::class, 'sendtoUser']);
Route::get('/adminLogin', [AdminLoginController::class, 'index']);
Route::post('/loginAdmin', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/', [UserLoginController::class, 'login'])->name('user.login');
Route::get('/settings', [ChatroomController::class, 'settings']);
Route::get('/chatroom', [ChatroomController::class, 'index']);
Route::get('/adminLogout', [AdminLoginController::class, 'logout']);
Route::get('/userLogout', [UserLoginController::class, 'logout']);


Route::get('/datauser', [AdminController::class, 'datauser']);
Route::get('/datapesan', [AdminController::class, 'datapesan']);
