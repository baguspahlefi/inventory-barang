<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TambahBarangController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cv', function () {
    return view('cv');
})->name('cv');

Route::get('/print', [TambahBarangController::class, 'print'])->name('tambah-barang.print');

Route::middleware('auth')->group(function () {
    Route::get('/create', [TambahBarangController::class, 'index'])->name('tambah-barang.create');
    Route::post('/store', [TambahBarangController::class, 'store'])->name('tambah-barang.store');
    Route::get('/edit/{id}', [TambahBarangController::class, 'edit'])->name('tambah-barang.edit');
    Route::put('/update/{id}', [TambahBarangController::class, 'update'])->name('tambah-barang.update');
});

Route::delete('/destroy/{id}', [TambahBarangController::class, 'destroy'])
->middleware('role:admin')
->name('tambah-barang.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
