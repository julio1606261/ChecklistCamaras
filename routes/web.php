<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\ReportesController;

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

Route::get('/', function () { return redirect()->route('home');});
Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/checklist/list', [ChecklistController::class, 'checklist_list'])->name('checklist_list');
Route::get('/checklist', [ChecklistController::class, 'checklist'])->name('checklist');
Route::get('/checklist/details/{id}', [ChecklistController::class, 'checklist_details'])->name('checklist_details');
Route::post('/checklist', [ChecklistController::class, 'checklist_store'])->name('checklist_store');


Route::get('/reportes', [ReportesController::class, 'index'])->name('reportes');