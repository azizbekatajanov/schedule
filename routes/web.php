<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TeacherController;
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
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('signin', [\App\Http\Controllers\UserController::class, 'index'])->name('signin.index');
Route::post('signin', [\App\Http\Controllers\UserController::class, 'signin'])->name('signin.post');



Route::middleware('auth:web')->prefix('dashboard')->group(function (){
    Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('dashboard');
    Route::resources([
        'lessons'=> LessonController::class,
        'teachers'=> TeacherController::class,
        'rooms'=>  RoomController::class,
        'groups'=> GroupController::class,
        'schedules'=> ScheduleController::class
    ]);
});
