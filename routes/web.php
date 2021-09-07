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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

/* Am trying to make your code more readble and very clean */

Auth::routes();

Route::prefix('admin')->name('admin.')->group(function () {
    //admin Authentication Routes
    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'Admin\AdminTaskOperationController@getAdminDashboard')->name('dashboard');
    });    
});


Route::prefix('customer')->name('customer.')->group(function () {
    //customer Authentication Routes
    Route::post('login-attempt', 'CustomerGustController@login')->name('login-attempt');
    Route::post('login-attempt', 'CustomerGustController@login')->name('login-attempt');

    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'CustomerController@index')->name('dashboard');
    });    
});

Route::prefix('staff')->name('staff.')->group(function () {     
    Route::prefix('dashboard')->group(function () {
        Route::get('/', 'UserController@index')->name('dashboard');
    });    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('order-assign-to', 'OrderAssignToController');

Route::resource('car-repair-evidence', 'CarRepairEvidenceController');

Route::resource('order', 'OrderController');

Route::resource('user', 'UserController');

Route::resource('user-document', 'UserDocumentController');

Route::resource('admin', 'AdminController');

Route::resource('stock', 'StockController');

Route::resource('customer', 'CustomerController');

Route::resource('vehicle-part-detail', 'CompanyAssets\VehiclePartDetailController');

Route::resource('car-fuelling', 'CompanyAssets\CarFuellingController')->except('edit', 'update');

Route::resource('carservice', 'CompanyAssets\CarserviceController');

Route::resource('vehicle-document', 'CompanyAssets\VehicleDocumentController');

Route::resource('vehicle', 'CompanyAssets\VehicleController');

Route::resource('department', 'DepartmentController');

Route::resource('order-item', 'OrderItemController');


Route::resource('order-assign-to', 'OrderAssignToController');

Route::resource('car-repair-evidence', 'CarRepairEvidenceController');

Route::resource('order', 'OrderController');

Route::resource('user', 'UserController');

Route::resource('user-document', 'UserDocumentController');

Route::resource('admin', 'AdminController');

Route::resource('stock', 'StockController');

Route::resource('customer', 'CustomerController');

Route::resource('vehicle-part-detail', 'CompanyAssets\VehiclePartDetailController');

Route::resource('car-fuelling', 'CompanyAssets\CarFuellingController')->except('edit', 'update');

Route::resource('carservice', 'CompanyAssets\CarserviceController');

Route::resource('vehicle-document', 'CompanyAssets\VehicleDocumentController');

Route::resource('vehicle', 'CompanyAssets\VehicleController');

Route::resource('department', 'DepartmentController');

Route::resource('order-item', 'OrderItemController');
