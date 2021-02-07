<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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

Route::view('/', 'home')->name('home');

Route::view('intranet', 'intranet.index')->name('intranet');

Route::view('about', 'about')->name('about');

Route::view('contact', 'contact')->name('contact');

/*--------------------------------------------------------------------
| Manejo de Intranet
*/

  Route::get('intranet/projects', [ProjectController::class, 'index'])->name('projects.index');

//Route::resource('intranet/projects', ProjectController::class)->names('projects');
