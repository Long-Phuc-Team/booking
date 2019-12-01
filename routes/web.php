<?php

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

Route::get('home', 'VeXeController@showHomeView');

//Admin
Route::group(['prefix'=>'admin'],function(){
    Route::get('/', function(){
        return view('admin.admin');
    });

    Route::get('danh-sach-hang-xe', 'HangXeController@showDSHangXeView');
    Route::get('danh-sach-khach-hang', 'KhachHangController@showDSKhachHangView');
    Route::get('danh-sach-lich-trinh', 'LichTrinhController@showDSLichTrinhView');
    Route::get('danh-sach-tuyen', 'TuyenXeController@showDSTuyenView');
    Route::get('danh-sach-ve-xe', 'VeXeController@showDSVeXeView');
    Route::get('danh-sach-xe', 'XeController@showDSXeView');

});
