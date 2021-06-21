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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::get('/sertificate', [App\Http\Controllers\PageController::class, 'sertificate'])->name('sertificate'); 
Route::get('/about_us', [App\Http\Controllers\PageController::class, 'about'])->name('about_us'); 
Route::get('/contacts', [App\Http\Controllers\PageController::class, 'contacts'])->name('contacts'); 
Route::get('/projects', [App\Http\Controllers\PageController::class, 'projects'])->name('projects'); 
Route::get('/projects/{x}' , [App\Http\Controllers\PageController::class , 'showOneProject'])->where('x', '.*');

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
	Artisan::call('route:clear');
    return "Кэш очищен.";
});
