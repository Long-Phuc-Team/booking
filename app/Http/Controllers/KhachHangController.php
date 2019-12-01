<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KhachHang;

class KhachHangController extends Controller
{
    public function showDSKhachHangView(){
        $ds_khach_hang = KhachHang::getAllKhachHang();
        return view('admin.qlkh',['ds_khach_hang'=>$ds_khach_hang]);
    }
}
