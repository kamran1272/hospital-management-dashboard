<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HospitalController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products', [HospitalController::class, 'products'])->name('products');
Route::get('/services', [HospitalController::class, 'services'])->name('services');
Route::get('/clients', [HospitalController::class, 'clients'])->name('clients');
Route::get('/companies', [HospitalController::class, 'companies'])->name('companies');
Route::get('/demo', [HospitalController::class, 'demo'])->name('demo');
Route::post('/demorequest', [HospitalController::class, 'demo'])->name('demorequest');
Route::get('/appointment-schedule', [HospitalController::class, 'appointment'])->name('appointment-schedule');
Route::get('/patient-list', [HospitalController::class, 'patient'])->name('patient-list');

