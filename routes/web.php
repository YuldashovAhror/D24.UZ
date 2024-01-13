<?php

use App\Http\Controllers\Dashboard\DistrictController;
use App\Http\Controllers\Dashboard\OrganizationController;
use App\Http\Controllers\Dashboard\OrganizationTypeController;
use App\Http\Controllers\Dashboard\PersonController;
use App\Http\Controllers\Dashboard\ProfessionController;
use App\Http\Controllers\Dashboard\ProfessionlevelController;
use App\Http\Controllers\Dashboard\RegionController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\Dashboard\TypeController;
use App\Models\Professionlevel;
use Illuminate\Support\Facades\Route;

//Localization
// Route::get('/ru', function () {
//     session()->put('locale', 'ru');
//     return redirect()->back();
// })->name('languages');
// Route::get('/uz', function () {
//         session()->put('locale', 'uz');
//         return redirect()->back();
// })->name('languages');

//Front
Route::get('/', [\App\Http\Controllers\Front\FrontController::class, 'index'])->name('main');

//Dashboard
Route::group(['prefix' => 'dashboard'], function (){
    Route::name('dashboard.')->group(function (){

        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('index');
        Route::resource('/organization', OrganizationController::class);
        Route::resource('/person', PersonController::class);
        Route::resource('/region', RegionController::class);
        Route::resource('/district', DistrictController::class);
        Route::resource('/organizationtype', OrganizationTypeController::class);
        Route::resource('/type', TypeController::class);
        Route::resource('/service', ServiceController::class);
        Route::resource('/profession', ProfessionController::class);
        Route::resource('/professionlavel', ProfessionlevelController::class);

        Route::get('/getdistrict', [RegionController::class, 'getdistrict']);

    });
});


require __DIR__.'/auth.php';
