<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExceleImportController;
use App\Http\Controllers\QustionImportController;
use App\Http\Controllers\GovernanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RiskMangmentController;
use App\Http\Controllers\StaticsController;



use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AdminController;



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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {

    // Permissions
    Route::delete('permissions/destroy',[PermissionsController::class ,'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);
    // Roles
    Route::delete('roles/destroy', [RolesController::class,'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);
    // Users
    Route::delete('users/destroy',[UsersController::class,'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);
    //change-password
    Route::get("/change-password", [ AdminController::class,'changePassword'])->name("change-password");
    Route::put("/change-password", [ AdminController::class,'postChangePassword'])->name("post-change-password");


    Route::resource('dashboard',      DashboardController::class);

    Route::resource('governance',     GovernanceController::class);
    Route::get('/delete/governance/{governance}', [GovernanceController::class,'destroy'])->name('delete-governance');


    Route::resource('assigenment',    QustionImportController::class);
    Route::get('export-answer', [QustionImportController::class, 'export'])->name('export-answer');


    Route::resource('riskMangment', RiskMangmentController::class);
    Route::get('/delete/riskMangment/{riskMangment}', [RiskMangmentController::class
    ,'destroy'])->name('mangment-delete');
    Route::get('/edit/riskMangment/{riskMangment}', [RiskMangmentController::class
    ,'edit'])->name('edit-delete');

    Route::resource('/Excelerisk',    ExceleImportController::class);
    Route::get('/delete/Excelerisk/{risk}', [ExceleImportController::class ,'destroy'])->name('risk-delete');
    Route::get('/edit/Excelerisk/{risk}', [ExceleImportController::class
  ,'edit'])->name('edit-Excelerisk');

    Route::post('/import_excel/import', [ExceleImportController::class,'import'])->name('import_excel');
    Route::post('/qustion_excel/import', [QustionImportController::class,'import'])->name('qustion_excel');
    
    Route::get("statics" , [StaticsController::class , 'index'])->name("statics");


    Route::get('export', [ExceleImportController::class, 'export'])->name('export');

});
