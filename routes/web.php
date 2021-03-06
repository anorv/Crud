<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Auth;

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

// // Galime nueiti su nav bar i Employees puslapi
// Route::get('/Crud/', function () {
//     return view('employees');
// })->name('employees');

// // Galime nueiti su NAV baru i Projektus
// Route::get('/Crud/projects', function () {
//     return view('projects');
// })->name('projects');
// Kad galetume vaikscioti po Employes ir project puslapius
Route::get('/', function () { return view('employees'); })->name('employees');
Route::get('/projects', function () { return view('projects'); })->name('projects');


// Kad paimtu masyva is duonbazes ir isprintintu i ekrana Darbuotojus
Route::get('/', 'App\Http\Controllers\EmployeesController@index')->name('employees.index');
Route::get('/{id}', [EmployeesController::class, 'show'])->name('employees.show');
Route::post('/', [EmployeesController::class, 'store']);
Route::delete('/{id}', [EmployeesController::class, 'destroy'])->name('employees.destroy');
// Update puslapis employees
// Route::get('/{id}', 'App\Http\Controllers\EmployeesController@show');
Route::put('/{id}', [EmployeesController::class, 'update'])->name('employees.update');


// Kad paimtu masyva is duonbazes ir isprintintu i ekrana Projektus
Route::get('/projects', 'App\Http\Controllers\ProjectsController@index')->name('projects.index');
Route::get('/projects/{id}', [ProjectsController::class, 'show'])->name('projects.show');
Route::post('/projects', [ProjectsController::class, 'store']);
Route::delete('/projects/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
// Update puslapis projects
// Route::get('/{id}', 'App\Http\Controllers\ProjectsController@show');
Route::put('/projects/{id}', [ProjectsController::class, 'update'])->name('projects.update');


// use App\Models\Employees;
// Route::get('/db', function () {
//     $bp = new Employees();
//     $bp->Darbuotojas = "Bp 1";
//     $bp->save();
//     return Employees::where('Darbuotojas', 'Bp 1')->latest()->first();
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
