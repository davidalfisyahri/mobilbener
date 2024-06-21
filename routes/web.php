<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\spare_partController;
use App\Http\Controllers\SparepartdataController;
use App\Models\Sparepartdata;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//VIEW
Route::get('/login', function () {
    return view('login.login');
})->name('login');

Route::get('/', function () {
    return view('dashboard.index');
})->name('index');

Route::get('/newtransaction', function () {
    return view('transaction.newtransaction');
})->name('newtransaction');

Route::get('/stocksales', function () {
    return view('transaction.stocksales');
})->name('stocksales');

Route::get('/stockpurchase', function () {
    return view('transaction.stockpurchase');
})->name('stockpurchase');

Route::get('/sparepartdata', function () {
    return view('information.sparepartdata');
})->name('sparepartdata');

Route::get('/carhistory', function () {
    return view('information.carhistory');
})->name('carhistory');

Route::get('/transactionhistory', function () {
    return view('information.transactionhistory');
})->name('transactionhistory');

Route::get('/customerdata', function () {
    return view('information.customerdata');
})->name('customerdata');

Route::get('/trackingservicestatus', function () {
    return view('information.trackingservicestatus');
})->name('trackingservicestatus');

Route::get('/account', function () {
    return view('account.account');
})->name('account');

Route::get('/servicereport', function () {
    return view('report.servicereport');
})->name('servicereport');

Route::get('/purchasereport', function () {
    return view('report.purchasereport');
})->name('purchasereport');

Route::get('/salesreport', function () {
    return view('report.salesreport');
})->name('salesreport');

Route::get('/financialreport', function () {
    return view('report.financialreport');
})->name('financialreport');

/*
|--------------------------------------------------------------------------
| SPARE PART DATA
|--------------------------------------------------------------------------
*/
Route::resource('/sparepartdata', spare_partController::class);

/*
|--------------------------------------------------------------------------
| ACCOUNT
|--------------------------------------------------------------------------
*/
Route::resource('/account', employeeController::class);
