<?php
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
// use App\Http\Controllers\Backend\TenantsController;
use App\Http\Controllers\Backend\LandlordsController;
use App\Http\Controllers\Backend\ApartmentsController;
use App\Http\Controllers\Backend\HousesController;
use App\Http\Controllers\Backend\DepositeReportsController;
use App\Http\Controllers\Backend\PlacementFeesController;
use App\Http\Controllers\Backend\IncomesController;
use App\Http\Controllers\Backend\InvoicesController;
use App\Http\Controllers\Backend\UserController as BackendUser;
use GuzzleHttp\Middleware;
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
Route::get('/login',[UserController::class,'login'])->name('userlogin');
Route::post('/login/post',[UserController::class,'loginPost'])->name('user.loginPost');






// admin panel routes
Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[BackendUser::class,'loginPost'])->name('admin.loginPost');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {
   


Route::get('/',[DashboardController::class,'dash'])->name('dashboard.dash');
Route::get('/home',[HomeController::class,'home'])->name('dashboard.home');
Route::get('/logout',[BackendUser::class,'logout'])->name('logout');






Route::get('/apartments/list',[ApartmentsController::class,'apartmentlist'])->name('apartments.list');
Route::post('/apartments/store',[ApartmentsController::class,'apartmentstore'])->name('apartments.listPost');

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



Route::get('/tenants',[BackendUser::class,'tenantList'])->name('tenants.list');
Route::get('/users',[BackendUser::class,'userList'])->name('user.list');
Route::get('/landlords',[BackendUser::class,'landlordList'])->name('landlords.list');


});