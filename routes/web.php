<?php
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TenantsController;
use App\Http\Controllers\Backend\LandlordsController;
use App\Http\Controllers\Backend\ApartmentsController;
use App\Http\Controllers\Backend\HousesController;
use App\Http\Controllers\Backend\DepositeReportsController;
use App\Http\Controllers\Backend\PlacementFeesController;
use App\Http\Controllers\Backend\IncomesController;
use App\Http\Controllers\Backend\InvoicesController;
use App\Http\Controllers\Backend\UserController as BackendUser;

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
Route::get('/',[FrontendHome::class,'home'])->name(name:'home');
Route::get('/signup',[UserController::class,'signupform'])->name(name:'user.signup');
Route::post('/signup/store',[UserController::class,'signupformPost'])->name(name:'user.signup.store');







// admin panel routes

Route::group(['prefix'=>'admin'],function () {
    Route::get('/login',[BackendUser::class,'login'])->name('admin.login');
Route::get('/',[HomeController::class,'home']);
Route::get('/',[DashboardController::class,'dash'])->name('dashboard.dash');

Route::get('/tenants/listall',[TenantsController::class,'listall'])->name('tenants.listall');
Route::post('/tenants/store',[TenantsController::class,'store'])->name('tenants.store');

Route::get('/landlords/registernew',[LandlordsController::class,'registernew'])->name('landlords.registernew');
Route::get('/landlords/listall',[LandlordsController::class,'listall'])->name('landlords.listall');


Route::get('/apartments/registernew',[ApartmentsController::class,'registernew'])->name('apartments.registernew');
Route::get('/apartments/addhouse',[ApartmentsController::class,'addhouses'])->name('apartments.addhouses');
Route::get('/apartments/listall',[ApartmentsController::class,'listall'])->name('apartments.listall');

Route::get('/houses/listall',[HousesController::class,'listall'])->name('houses.listall');
Route::get('/houses/listvacant',[HousesController::class,'listvacant'])->name('houses.listvacant');
Route::get('/houses/listoccupied',[HousesController::class,'listoccupied'])->name('houses.listoccupied');
Route::post('/houses/store',[HousesController::class,'housepost'])->name('house.store');


Route::get('/depositereports/alldeposites',[DepositeReportsController::class,'alldeposites'])->name('depositereports.alldeposites');
Route::get('/depositereports/sortbyapartments',[DepositeReportsController::class,'sortbyapartments'])->name('depositereports.sortbyapartments');
Route::get('/depositereports/sumbyapartments',[DepositeReportsController::class,'sumbyapartments'])->name('depositereports.sumbyapartments');

Route::get('/placementfees/sortbyapartments',[PlacementFeesController::class,'viewbyapartments'])->name('placementfees.viewbyapartments');
Route::get('/placementfees/sumbyapartments',[PlacementFeesController::class,'viewbymonth'])->name('placementfees.viewbymonth');

Route::get('/incomes/landlordsincome',[IncomesController::class,'landlordsincome'])->name('incomes.landlordsincome');
Route::get('/incomes/companyincome',[IncomesController::class,'companyincome'])->name('incomes.companyincome');

Route::get('/invoices',[InvoicesController::class,'invoice'])->name('invoices.invoice');
});