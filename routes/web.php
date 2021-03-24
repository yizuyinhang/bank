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


//银行审批项目
Route::group(['prefix'=>'consumption','namespace'=>'admin'],function (){
//    商品渲染页面
    Route::get('commodity','ConsumptionController@index')->name('consumption.commodity');
//    支付页面
    Route::get('payment','ConsumptionController@payment')->name('payment');

    Route::post('add','ConsumptionController@add')->name('lot.add');
});
