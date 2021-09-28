<?php
use App\Http\Controllers\Frontend\HomeController as FrontendHome;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\RentController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HouseController;


use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\AmenitiesController;
use App\Http\Controllers\Backend\HousesController;
use App\Http\Controllers\Backend\RentController as BackendRentList;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\InvoicesController;
use App\Http\Controllers\Backend\UserController as BackendUser;
use App\Http\Controllers\Backend\ReportController;
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



Route::get('/search',[HouseController::class,'search'])->name('search');









Route::get('/about',[AboutController::class,'about'])->name(name:'user.about');
Route::get('/house',[HouseController::class,'house'])->name(name:'user.house');
Route::get('/contact',[FrontendHome::class,'contact'])->name(name:'homecontact');
Route::get('/house/view_house_details/{id}',[HouseController::class,'viewHouse'])->name(name:'singleHouse.view');




Route::group(['prefix'=>'tenant','middleware'=>'authuser','role'],function (){

    
    Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
    Route::get('/renthouse/{id}',[RentController::class,'houserent'])->name('houserent');
Route::post('/renthouse/store',[RentController::class,'houserentPost'])->name('houserent.post');
Route::get('/userprofile/view/',[UserController::class,'profileview'])->name('profile.view');
Route::get('/rent_details/view/',[RentController::class,'rent_details'])->name('rent_details.view');
    
});




// admin panel routes
Route::get('/admin/login',[BackendUser::class,'login'])->name('admin.login');
Route::post('/admin/login/post',[BackendUser::class,'loginPost'])->name('admin.loginPost');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
   
    Route::group(['middleware'=>'role'],function (){


        Route::get('/categories/houses',[CategoryController::class,'category'])->name('categories.list');
        Route::post('/categories/store',[CategoryController::class,'categorystore'])->name('category.store');
        Route::get('/categories/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
        Route::get('/categories/edit/{id}',[CategoryController::class,'edit'])->name('categories.edit');
      Route::put('/categories/update/{id}',[CategoryController::class,'update'])->name('category.put');



      Route::get('/amenities',[AmenitiesController::class,'amenities'])->name('amenities.list');
        Route::post('/amenities/store',[AmenitiesController::class,'amenitiesstore'])->name('amenities.store');
        Route::get('/amenities/edit/{id}',[AmenitiesController::class,'edit'])->name('amenities.edit');
      Route::put('/amenities/update/{id}',[AmenitiesController::class,'update'])->name('amenities.put');
      Route::get('/amenities/delete/{id}',[AmenitiesController::class,'delete'])->name('amenities.delete');


       Route::get('/houses/listall',[HousesController::class,'listall'])->name('houses.listall');
// Route::get('/houses/listvacant',[HousesController::class,'listvacant'])->name('houses.listvacant');
      Route::get('/houses/rentList',[BackendRentList::class,'rentList'])->name('houses.rentList');
      Route::get('/houses/rent/{id}',[BackendRentList::class,'rentinfo'])->name('houses.rentInfo');
      
      Route::get('/houses/approved/{id}',[BackendRentList::class,'approved'])->name('houses.approved');
      Route::get('/houses/cancel/{id}',[BackendRentList::class,'cancel'])->name('houses.cancel');
      Route::get('/houses/approvedlist',[BackendRentList::class,'approvedlist'])->name('houses.approvedlist');
      Route::get('/houses/cancellist',[BackendRentList::class,'cancellist'])->name('houses.cancellist');






      Route::post('/houses/store',[HousesController::class,'housepost'])->name('house.store');
      Route::get('/houses/delete/{id}',[HousesController::class,'delete'])->name('houses.delete');
      Route::get('/houses/edit/{id}',[HousesController::class,'houseedit'])->name('houses.edit');
      Route::put('/houses/update/{id}',[HousesController::class,'update'])->name('houses.put');


      Route::get('/payment/create/{id}',[PaymentController::class,'paymentcreate'])->name('payment.create');
      Route::post('/payment/store',[PaymentController::class,'paymentstore'])->name('payment.store');
      Route::get('/payment/list',[PaymentController::class,'paymentlist'])->name('payment.list');
      Route::get('/payment/approved/{id}',[PaymentController::class,'approved'])->name('payment.confirm');
      


      Route::get('/incomes/companyincome',[IncomesController::class,'companyincome'])->name('incomes.companyincome');

      Route::get('/invoices',[InvoicesController::class,'invoice'])->name('invoices.invoice');



      Route::get('/tenants',[BackendUser::class,'tenantList'])->name('tenants.list');
      Route::get('/tenants/View/{id}',[BackendUser::class,'tenantview'])->name('tenants.viewTenant');
      Route::get('/tenants/delete/{id}',[BackendUser::class,'tenantdelete'])->name('tenants.delete');
      Route::get('/tenants/edit/{id}',[BackendUser::class,'tenantedit'])->name('tenants.edit');


      Route::get('/users',[BackendUser::class,'userList'])->name('users.user');
      Route::get('/users/edit/{id}',[BackendUser::class,'useredit'])->name('user.edit');
      Route::get('/users/delete/{id}',[BackendUser::class,'userdelete'])->name('user.delete');
      Route::get('/report',[ReportController::class,'reportsearch'])->name('reports');
    
          });
//   Route::group(['prefix'=>'landlord','middleware'=>'landlord'],function (){

//     Route::get('/tenants',[BackendUser::class,'tenantList'])->name('tenants.list');
//     Route::get('/tenants/View/{id}',[BackendUser::class,'tenantview'])->name('tenants.viewTenant');
//     Route::get('/tenants/delete/{id}',[BackendUser::class,'tenantdelete'])->name('tenants.delete');
//     Route::get('/tenants/edit/{id}',[BackendUser::class,'tenantedit'])->name('tenants.edit');

//     Route::get('/houses/listall',[HousesController::class,'listall'])->name('houses.listall');
//     Route::get('/houses/bookingList',[BackendRentList::class,'bookingList'])->name('houses.bookingList');

//     Route::post('/houses/store',[HousesController::class,'housepost'])->name('house.store');
//     Route::get('/houses/delete/{id}',[HousesController::class,'delete'])->name('houses.delete');
//     Route::get('/houses/edit',[HousesController::class,'houseedit'])->name('houses.edit');

// });

Route::get('/',[DashboardController::class,'dash'])->name('dashboard.dash');
Route::get('/home',[HomeController::class,'home'])->name('dashboard.home');
Route::get('/logout',[BackendUser::class,'logout'])->name('logout');


});