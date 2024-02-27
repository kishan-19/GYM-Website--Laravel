<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\joinController;
use App\Http\Controllers\trainerController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\classesController;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

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


Route::get('/', [homeController::class, 'home'])->name('home');
Route::get('/about', [aboutController::class, 'about'])->name('about');
Route::get('/join', [joinController::class, 'joinGym'])->name('joinGymPage');
Route::post('/join', [joinController::class, 'pksub'])->name('joinGymPage.post');
Route::get('/trainers', [trainerController::class, 'trainer'])->name('trainersPage');
Route::get('/contact', [contactController::class, 'contact'])->name('contactPage');
Route::post('/contact', [contactController::class, 'store'])->name('contact.post');
Route::get('/classes', [classesController::class, 'classes'])->name('classesPage')->middleware('classesAccessMid');
Route::get('/404', function () {
        return view('/404');
    });
