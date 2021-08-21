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

Auth::routes(); //  front_end back_end ui_ux_design additional_module crm crm_frontend php_modules 1C_integration

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sertificate', [App\Http\Controllers\PageController::class, 'sertificate'])->name('sertificate');
Route::get('/about_us', [App\Http\Controllers\PageController::class, 'about'])->name('about_us');
Route::get('/contacts', [App\Http\Controllers\PageController::class, 'contacts'])->name('contacts');
Route::get('/front_end', [App\Http\Controllers\PageController::class, 'front_end'])->name('front_end');
Route::get('/back_end', [App\Http\Controllers\PageController::class, 'back_end'])->name('back_end');
Route::get('/ui_ux_design', [App\Http\Controllers\PageController::class, 'ui_ux_design'])->name('ui_ux_design');
Route::get('/additional_module', [App\Http\Controllers\PageController::class, 'additional_module'])->name('additional_module');
Route::get('/crm', [App\Http\Controllers\PageController::class, 'crm'])->name('crm');
Route::get('/crm_frontend', [App\Http\Controllers\PageController::class, 'crm_frontend'])->name('crm_frontend');
Route::get('/php_modules', [App\Http\Controllers\PageController::class, 'php_modules'])->name('php_modules');
Route::get('/1C_integration', [App\Http\Controllers\PageController::class, 'web_1C_integration'])->name('1C_integration');


Route::get('/projects', [App\Http\Controllers\PageController::class, 'projects'])->name('projects');
Route::get('/projects/{x}' , [App\Http\Controllers\PageController::class , 'showOneProject'])->where('x', '.*');

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
	Artisan::call('route:clear');
    return "Кэш очищен.";
});


Route::post('send-mail', [App\Http\Controllers\PageController::class , 'sendMail']);

Route::post('upload-file', [App\Http\Controllers\PageController::class , 'fileUpload']);
