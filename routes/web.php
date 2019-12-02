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

    //Show all danh sách
    Route::get('danh-sach-hang-xe', 'HangXeController@showDSHangXeView');
    Route::get('danh-sach-khach-hang', 'KhachHangController@showDSKhachHangView');
    Route::get('danh-sach-lich-trinh', 'LichTrinhController@showDSLichTrinhView');
    Route::get('danh-sach-tuyen', 'TuyenXeController@showDSTuyenView');
    Route::get('danh-sach-ve-xe', 'VeXeController@showDSVeXeView');
    Route::get('danh-sach-xe', 'XeController@showDSXeView');
    Route::get('trang-thai-dat-ve', 'TrangThaiDatVeController@showTTDVXView');

    // Show danh sách theo ID
    Route::get('danh-sach-ve-xe/{id}', 'VeXeController@showDSVeXeTheoLichTrinhView');
    Route::get('danh-sach-xe/{id}', 'XeController@showDSXeTheoHangView');
    Route::get('trang-thai-dat-ve/{id}', 'TrangThaiDatVeController@showTTDVXTheoLichTrinhView');
    Route::get('danh-sach-lich-trinh/{id}', 'LichTrinhController@showDSLichTrinhTheoTuyenView');

    // Them
    Route::get('them-hang-xe', 'HangXeController@showViewThemHangXe');
    Route::post('them-hang-xe', 'HangXeController@batSuKienClickButton');
});
