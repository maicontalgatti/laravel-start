<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AssistanceController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\PeopleController;
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

Route::get('/assistance', [AssistanceController::class, 'index'])->name('assistance.index');

Route::get('/records', [RecordsController::class, 'index'])->name('records.index');



//rotas de views da records
Route::get('/records/people', [RecordsController::class, 'people'])->name(name: 'records.people');
Route::get('/records/projects', [RecordsController::class, 'projects'])->name('records.projects');
Route::get('/records/vehicles', [RecordsController::class, 'vehicles'])->name('records.vehicles');
Route::get('/records/clients', [RecordsController::class, 'clients'])->name('records.clients');

//rotas das views de records ADD
Route::get('/records/people/add', [PeopleController::class, 'new'])->name('people.add');
Route::post('/records/people/add', [PeopleController::class, 'store'])->name('people.store');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/chirps', ChirpController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
