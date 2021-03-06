<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ExelGen;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'], function () {
    return view('welcome');
});

Route::get('/forms', function () {
    return view('forms');
});
// Добавил роутинг для консроллера PDFController /app/Http/Controllers/PDFController
// Route::get('pdf/preview', [PDFController::class, 'preview'])->name('pdf.preview');
// Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->name('pdf.generate');
// Route::get('create',[DocumentController::class, 'create']);
// Route::get('store',[DocumentController::class, 'store']);
Route::post('exel', [ExelGen::class, 'generateExcel']);
Auth::routes();
Route::get('/personal', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/personal/list', [App\Http\Controllers\AdminController::class, 'list'])->name('list');
Route::get('/personal/list/download/{id}', [App\Http\Controllers\AdminController::class, 'download']);
Route::get('/personal/list/show/{id}', [App\Http\Controllers\AdminController::class, 'show']);
Route::get('/personal/list/docs/{id}', [App\Http\Controllers\AdminController::class, 'docs']);
Route::post('/personal/list/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit']);
Route::post('/personal/list/updateDocs/{id}', [App\Http\Controllers\AdminController::class, 'updateDocs']);
Route::post('/personal/list/deleted/', [App\Http\Controllers\AdminController::class, 'deleted']);

Route::put('/personal/settings/{id}', [App\Http\Controllers\AdminController::class, 'updateDataUser']);

Route::get('/personal/list/ojr/', [App\Http\Controllers\AdminController::class, 'ojr']);
Route::get('/personal/list/ojr/create/{id}', [App\Http\Controllers\AdminController::class, 'ojrCreate']);
Route::get('/personal/list/ojr/deleted/{id}', [App\Http\Controllers\AdminController::class, 'ojrDeleted']);

Route::get('/personal/list/ojr/add', [App\Http\Controllers\AdminController::class, 'ojrView']);
Route::get('/personal/list/ojr/edit/{id}', [App\Http\Controllers\AdminController::class, 'ojrViewEdit']);
Route::get('/personal/list/ojr/edit/save/{id}', [App\Http\Controllers\AdminController::class, 'ojrEdit']);
Route::get('/personal/list/ojr/add/newojr', [App\Http\Controllers\AdminController::class, 'ojrAdd']);
Route::get('/personal/list/ojr/add/save', [App\Http\Controllers\AdminController::class, 'ojrSave']);
Route::get('/personal/list/ojr/aosr/view/{id}', [App\Http\Controllers\AdminController::class, 'ojrAosrView']);
Route::get('/personal/list/ojr/aosr/save', [App\Http\Controllers\AdminController::class, 'ojrAosrSave']);



Route::post('/personal/list/ojr/date', [App\Http\Controllers\AdminController::class, 'ojrDate']);