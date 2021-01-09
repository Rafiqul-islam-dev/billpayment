<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\HomeController;

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
    return redirect()->route('login');
});

//Route::get("home", [HomeController::class, 'index']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customerProfile/{id}', 'HomeController@customerProfile');


Route::resource('/customer', 'Admin\AdminDashbordConytoller');
Route::resource('/Bill', 'Admin\BillCollectionController');
Route::get('/deuBill', 'Admin\DeuController@deuBill');

Route::get('customer.destroy/{id}', 'Admin\AdminDashbordConytoller@destroy');

//bill part


//Monthly Bill
Route::get('/January', 'Admin\MonthlyController@January');
Route::get('/February', 'Admin\MonthlyController@February');
Route::get('/March', 'Admin\MonthlyController@March');
Route::get('/April', 'Admin\MonthlyController@April');
Route::get('/May', 'Admin\MonthlyController@May');
Route::get('/June', 'Admin\MonthlyController@June');
Route::get('/July', 'Admin\MonthlyController@June');
Route::get('/August', 'Admin\MonthlyController@August');
Route::get('/September', 'Admin\MonthlyController@September');
Route::get('/October', 'Admin\MonthlyController@October');
Route::get('/November', 'Admin\MonthlyController@November');
Route::get('/December', 'Admin\MonthlyController@December');



//deu Bill
Route::get('/JanuaryDeu', 'Admin\DeuController@January');
Route::get('/FebruaryDeu', 'Admin\DeuController@February');
Route::get('/MarchDeu', 'Admin\DeuController@March');
Route::get('/AprilDeu', 'Admin\DeuController@April');
Route::get('/MayDeu', 'Admin\DeuController@May');
Route::get('/JuneDeu', 'Admin\DeuController@June');
Route::get('/JulyDeu', 'Admin\DeuController@June');
Route::get('/AugustDeu', 'Admin\DeuController@August');
Route::get('/SeptembeDeur', 'Admin\DeuController@September');
Route::get('/OctoberDeu', 'Admin\DeuController@October');
Route::get('/NovemberDeu', 'Admin\DeuController@November');
Route::get('/DecemberDeu', 'Admin\DeuController@December');
