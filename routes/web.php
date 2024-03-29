<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\KartelaController;
use App\Http\Controllers\OperacionController;
use App\Http\Controllers\SherbimiController;
use App\Http\Controllers\VizitaController;
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


Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
Route::get('/signup', [AuthController::class, 'create'])->name('auth.signup');
Route::post('/login', [AuthController::class, 'store'])->name('auth.store');
Route::get('/authenticate', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::post('', [AuthController::class, 'logout'])->name('auth.logout');
Route::put('/profile/{id}', [AuthController::class, 'update'])->name('contain.update.profile');



Route::middleware('auth')->group(function () {
    Route::get('/', [AllController::class, 'index'])->name('contain.welcome');
    Route::post('/analiza', [AllController::class, 'store'])->name('contain.store.analiza');
    Route::post('/anamneza', [AllController::class, 'anamneza'])->name('contain.store.anamneza');
    Route::get('/delete/analiza/{id}', [AllController::class, 'destroy'])->name('contain.destroy.analiza');
    Route::get('/delete/anamneza/{id}', [AllController::class, 'anamneza_destroy'])->name('contain.destroy.anamneza');
    Route::get('/profile', [AllController::class, 'profile'])->name('contain.profile');
    Route::get('/anamneza/{id}', [AllController::class, 'anamneza_index'])->name('contain.anamneza');

    Route::get('/kartela', [KartelaController::class, 'index'])->name('contain.kartela');
    Route::post('/kartela', [KartelaController::class, 'store'])->name('contain.store.kartela');
    Route::get('/kartela/{id}', [KartelaController::class, 'show'])->name('contain.single.kartela');
    Route::put('/kartela/{id}', [KartelaController::class, 'update'])->name('contain.update.kartela');
    
    Route::get('/historiku', [VizitaController::class, 'index'])->name('contain.historiku');
    Route::post('/historiku', [VizitaController::class, 'store'])->name('contain.store.historiku');
    Route::get('/delete/vizita/{id}', [VizitaController::class, 'destroy'])->name('contain.destroy.vizita');


    Route::get('/sherbimi', [SherbimiController::class, 'index'])->name('contain.sherbimi');
    Route::post('/sherbimi', [SherbimiController::class, 'store'])->name('contain.store.sherbimi');
    Route::get('/delete/sherbimi/{id}', [SherbimiController::class, 'destroy'])->name('contain.destroy.sherbimi');

    Route::post('/operim', [OperacionController::class, 'store'])->name('contain.store.operimi');
    Route::get('/operim/{id}', [OperacionController::class, 'show'])->name('contain.show.operimi');
    Route::get('/delete/operim/{id}', [OperacionController::class, 'destroy'])->name('contain.destroy.operacioni');
    
    Route::get('/calendar', [CalendarController::class, 'index'])->name('contain.calendar2');
    Route::get('/kalendari', [CalendarController::class, 'view'])->name('contain.calendar');
    Route::get('/kalendarii', [CalendarController::class, 'view2'])->name('contain.calendarr');
    Route::post('/kalendariii', [CalendarController::class, 'store'])->name('contain.store.calendar');
    Route::put('/calendar/update/{id}', [CalendarController::class, 'update']);
    Route::get('/delete/calendar/{id}', [CalendarController::class, 'destroy'])->name('contain.destroy.calendar');
});

