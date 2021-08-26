<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('signin', [UserController::class, 'index'])->name('signin.index');
Route::post('signin', [UserController::class, 'signin'])->name('signin.post');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');



Route::middleware('auth:web')->prefix('dashboard')->group(function (){
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resources([
        'lessons'=> LessonController::class,
        'teachers'=> TeacherController::class,
        'rooms'=>  RoomController::class,
        'groups'=> GroupController::class,
        'schedules'=> ScheduleController::class
    ]);
});
