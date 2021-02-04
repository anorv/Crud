<?php

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
Route::get('projects', function () { return view('projects'); })->name('projects');


// Kad paimtu masyva is duonbazes ir isprintintu i ekrana
Route::get('/', 'App\Http\Controllers\EmployeesController@index')->name('employees.index');
Route::get('/{id}', [EmployeesController::class, 'show'])->name('employees.show');


