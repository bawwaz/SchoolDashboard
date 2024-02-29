<?php

use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'out'])->name('logout');


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware('guest');

Route::get('/dashboard/all', function () {
    return view('dashboard.layouts.main');
})->middleware('auth'); 

Route::get('/dashboard/about', [DashboardController::class, 'about']);

Route::get('/dashboard/all', [DashboardController::class, 'index'])->name('dashboard.all')->middleware('auth');
Route::get('/dashboard/kelas', [DashboardController::class, 'kelas']);


Route::get('/dashboard/student', [DashboardController::class, 'student'])->name('dashboard.student')->middleware('auth');
Route::get('/dashboard/detail/{student}', [DashboardController::class, 'showdetail']);




Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/home', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view(
        'about',
    [
        "title" => "About", 
        "nama" => "Fawwaz", 
        "kelas" => "11 PPLG 2", 
        "foto" => "assets/test.png"
    ]);
});

Route :: group(['prefix' => 'students'], function () {
    Route::get('/all', [StudentsController::class, 'index']);
    Route::get('/detail/{student}', [StudentsController::class, 'show']);
    Route::get('/create', [StudentsController::class, 'create'])->name('student.create');
    Route::post('/store', [StudentsController::class, 'store'])->name('student.store');
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy'])->name('student.destroy');
    Route::get('/{student}/edit', [StudentsController::class, 'edit'])->name('student.edit');
    Route::post('/students/{student}', [StudentsController::class, 'update'])->name('student.update');

});

Route :: group(['prefix' => 'kelas'], function () {
    Route::get('/all', [KelasController::class, 'index']);
    Route::get('/detail/{kelas}', [KelasController::class, 'show']);
    Route::get('/create', [KelasController::class, 'create'])->name('kelas.create');
    Route::post('/store', [KelasController::class, 'store'])->name('kelas.store');
    Route::delete('/delete/{kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');
    Route::get('/{kelas}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::patch('/kelas/{kelas}', [KelasController::class, 'update'])->name('kelas.update');
});
