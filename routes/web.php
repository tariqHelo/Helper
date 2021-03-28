<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExceleImportController;
use App\Http\Controllers\QustionImportController;

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
Route::get('/index', [ExceleImportController::class,'index'])->name('risks');

Route::get('/', function () {
    return view('layouts.admin');
});
Route::get('/1', function () {
return view('admin.dashboard.main');
})->name('main');

Route::get('/2', function () {
return view('admin.governance.governance');
})->name('governance');

Route::get('/3', function () {
return view('admin.assigenment.assigenment');
})->name('assignments');

Route::get('/4', function () {
return view('admin.assigenment.assigenment');
})->name('riskMangment');

Route::get('/5', function () {
return view('admin.import.excel');
})->name('Risks');


// Route::get('/4', function () {
// return view('admin.import.excel');
// });
Route::post('/import_excel/import', [ExceleImportController::class,'import'])->name('import_excel');
// Route::get('/3', function () {
// return view('admin.import.excel');
// });
Route::post('/import_excel/import', [QustionImportController::class,'import'])->name('qustion_excel');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
