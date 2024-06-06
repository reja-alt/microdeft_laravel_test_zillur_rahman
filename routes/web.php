<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;

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


Route::get('create_donor', [DonorController::class, 'create']);
Route::get('donor_index', [DonorController::class, 'index']);
Route::post('create_donor', [DonorController::class, 'store'])->name('donor.store');
Route::get('edit_donor/{id}', [DonorController::class, 'edit'])->name('donor.edit');