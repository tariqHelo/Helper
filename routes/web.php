<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExceleImportController;
use App\Http\Controllers\QustionImportController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;

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



Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {

Route::get('/', function () {
return view('layouts.admin');
});
// Permissions
Route::delete('permissions/destroy',[PermissionsController::class ,'massDestroy'])->name('permissions.massDestroy');
Route::resource('permissions', PermissionsController::class);
// Roles
Route::delete('roles/destroy', [RolesController::class,'massDestroy'])->name('roles.massDestroy');
Route::resource('roles', RolesController::class);
 // Users
Route::delete('users/destroy',[UsersController::class,'massDestroy'])->name('users.massDestroy');
Route::resource('users', UsersController::class);


Route::get('/index', [ExceleImportController::class,'index'])->name('risks');


Route::get('/assigenment',[QustionImportController::class,'index'])->name('assignments');
Route::post('/store/assigenment',[QustionImportController::class,'store'])->name('store-assignments');



Route::get('/', function () {
return view('layouts.admin');
});
Route::get('/1', function () {
return view('admin.dashboard.main');
})->name('main');

Route::get('/2', function () {
return view('admin.governance.governance');
})->name('governance');

Route::get('/4', function () {
return view('admin.assigenment.assigenment');
})->name('riskMangment');

Route::get('/5', function () {
return view('admin.import.excel');
})->name('Risks');



Route::get('/6', function () {
return view('admin.mangment.mangment');
})->name('mangment');


// Permissions
// // Roles
// //Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
// Route::resource('roles', [RolesController::class,'index']);

// // Users
// //Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
// Route::resource('users', [UsersController::class,'index']);




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

});
