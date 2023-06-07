<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatroomController;
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

Route::post('/loginAdmin', [AdminLoginController::class, 'login']);

Route::get('/test', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function () {
    Route::get('/loginAdmin', 'AdminLoginController@index')->name('admin.login');
    Route::post('/loginAdmin', 'AdminLoginController@login');
    Route::post('/logoutAdmin', 'AdminLoginController@logout')->name('admin.logout');
});

Route::get('/chatroom', [ChatroomController::class, 'index']);
Route::get('/settings', [ChatroomController::class, 'settings']);