<?php

use Illuminate\Support\Facades\Route;


Route::prefix('worker')->name('worker.')->middleware(['guest', 'PBkHistory'])->group(function () {
    Route::get('register', 'Auth\LoginWorkerController@showRegForm')->name('register');
    Route::post('register', 'Auth\LoginWorkerController@store')->name('store');
    Route::get('login', 'Auth\LoginWorkerController@showLogin')->name('showLogin');
    Route::post('login', 'Auth\LoginWorkerController@login')->name('attempt-login');

    Route::prefix('dashboard')->middleware(['auth:worker', 'PBkHistory'])->group(function () {
        Route::get('/profile', 'WorkerController@profile')->name('profile');
        Route::get('/my-assigned-orders', 'WorkerController@assignedOrders')->name('my-assigned-orders');
        Route::get('/my-clients', 'WorkerController@myClients')->name('my-clients');
        Route::get('/reports', 'WorkerController@myReports')->name('reports');
        Route::resource('car-repair-evidence', 'CarRepairEvidenceController');
        Route::resource('order', 'OrderController');
        Route::resource('user-document', 'UserDocumentController');
        Route::resource('stock', 'StockController');

        Route::get('/', 'WorkerController@index')->name('dashboard');
        Route::get('/logout', 'Auth\LoginWorkerController@logout')->name('logout');
    });
});

Route::prefix('client')->name('client.')->middleware(['guest', 'PBkHistory'])->group(function () {
    Route::get('register', 'Auth\AuthCustomer\CustomerLoginController@showRegForm')->name('register');
    Route::post('register', 'Auth\AuthCustomer\CustomerLoginController@store')->name('store');
    Route::get('login', 'Auth\AuthCustomer\CustomerLoginController@showLogin')->name('showLogin');
    Route::post('login', 'Auth\AuthCustomer\CustomerLoginController@login')->name('attempt-login');

    Route::prefix('dashboard')->middleware(['auth:customer', 'PBkHistory'])->group(function () {
        Route::get('/my-order', 'CustomerController@myOrders')->name('my-orders');
        Route::get('/car-service-history', 'CustomerController@myCarServices')->name('my-car-services');
        Route::get('/profile', 'CustomerController@index')->name('profile');
        Route::get('/logout', 'Auth\AuthCustomer\CustomerLoginController@logout')->name('logout');
        Route::get('/', 'CustomerController@index')->name('dashboard');
    });
});



/* ___________________________________AMIN ROUTE _____________________________________ */
Route::prefix('admin')->name('admin.')->middleware(['guest:admin','PBkHistory'])->group(function () {
    Route::prefix('account')->group(function () {
        Route::get('/login', 'Auth\AuthAdmin\AdminLoginController@showLoginForm')->name('loginForm');
        Route::post('/login', 'Auth\AuthAdmin\AdminLoginController@login')->name('login-attempt');
    });

});

Route::prefix('admin-dashboard')->name('admin.')->middleware(['auth:admin', 'PBkHistory'])->group(function () {
    Route::get('registered-users', 'AdminController@getAllUsers')->name('registered-users');
    Route::resource('order-assign-to', 'OrderAssignToController');
    Route::resource('car-repair-evidence', 'CarRepairEvidenceController');
    Route::resource('order', 'OrderController');
    Route::resource('user', 'UserController');
    Route::resource('user-document', 'UserDocumentController');
    Route::resource('admin', 'AdminController');
    Route::resource('stock', 'StockController');
    Route::resource('customer', 'CustomerController');
    Route::resource('order-item', 'OrderItemController');
    Route::get('/logout', 'Auth\AuthAdmin\AdminLoginController@adminLogout')->name('logout');
    Route::get('/', 'AdminController@index')->name('dashboard');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('vehicle-part-detail', 'CompanyAssets\VehiclePartDetailController');

Route::resource('car-fuelling', 'CompanyAssets\CarFuellingController')->except('edit', 'update');

Route::resource('carservice', 'CompanyAssets\CarserviceController');

Route::resource('vehicle-document', 'CompanyAssets\VehicleDocumentController');

Route::resource('vehicle', 'CompanyAssets\VehicleController');

Route::resource('department', 'DepartmentController');


Route::get('/', 'PageController@indexPage')->name('index');
