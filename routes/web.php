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
    Route::get('danh-sach-tuyen-xe', 'TuyenXeController@showDSTuyenXeView');
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
    Route::get('them-tuyen-xe', 'TuyenXeController@showViewThemTuyenXe');
    Route::post('them-tuyen-xe', 'TuyenXeController@batSuKienClickButton');
    Route::get('them-lich-trinh', 'LichTrinhController@showViewThemLichTrinh');
    Route::post('them-lich-trinh', 'LichTrinhController@batSuKienClickButton');
    Route::get('them-xe', 'XeController@showViewThemXe');
    Route::post('them-xe', 'XeController@batSuKienClickButton');


    // Sua
    Route::get('sua-hang-xe/{id}', 'HangXeController@showViewSuaHangXe');
    Route::post('sua-hang-xe', 'HangXeController@batSuKienClickButton');
    Route::get('sua-tuyen-xe/{id}', 'TuyenXeController@showViewSuaTuyenXe');
    Route::post('sua-tuyen-xe', 'TuyenXeController@batSuKienClickButton');
    Route::get('sua-lich-trinh/{id}', 'LichTrinhController@showViewSuaLichTrinh');
    Route::post('sua-lich-trinh', 'LichTrinhController@batSuKienClickButton');
    Route::get('sua-xe/{id}', 'XeController@showViewSuaXe');
    Route::post('sua-xe', 'XeController@batSuKienClickButton');

    //Chi tiết
    Route::get('chi-tiet-tuyen-xe/{id}', 'TuyenXeController@showViewChiTietTuyenXe');
    Route::get('chi-tiet-ve-xe/{id}', 'VeXeController@showViewChiTietVeXe');
    Route::get('chi-tiet-xe/{id}', 'XeController@showViewChiTietXe');
});

// Load ajax
Route::group(['prefix'=>'ajax'],function(){
    Route::get('load-cbx-xe-theo-cbx-hang/{id}', 'LichTrinhController@loadCbxXeTheoHang');
});
