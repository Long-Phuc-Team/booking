<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrangThaiDatVe;

class TrangThaiDatVeController extends Controller
{
    public function showTTDVXView(){
        $ds_trang_thai_dat_ve = TrangThaiDatVe::getAllTrangThaiDatVe();
        return view('admin.qlttdvx',['ds_trang_thai_dat_ve'=>$ds_trang_thai_dat_ve]);
    }

    public function showTTDVXTheoLichTrinhView($id){
        $ds_trang_thai_dat_ve = TrangThaiDatVe::getAllTrangThaiDatVeTheoLichTrinh($id);
        return view('admin.qlttdvx',['ds_trang_thai_dat_ve'=>$ds_trang_thai_dat_ve]);
    }
}
