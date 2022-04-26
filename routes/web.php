<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardSalaryController;
use App\Http\Controllers\DahsboardEmployeeController;
use App\Http\Controllers\DashboardCalendarController;
use App\Http\Controllers\DashboardScheduleController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);\

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
    Route::get('/dashboard', function(){
        return view('dashboard.index');
    });
    Route::resource('/dashboard/employees', DahsboardEmployeeController::class);
    Route::resource('/dashboard/calendars', DashboardCalendarController::class);
    Route::resource('/dashboard/salaries', DashboardSalaryController::class);
    Route::resource('/dashboard/schedules', DashboardScheduleController::class);
});


Route::group(['middleware' => ['auth', 'ceklevel:admin,pegawai']], function(){
    Route::get('/dashboard', function(){
        return view('dashboard.index');
    });
    Route::resource('/dashboard/calendars', DashboardCalendarController::class);
});

