<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vexe;

class VeXeController extends Controller
{
    protected function showDSVeXeView(){
        $ds_ve_xe = VeXe::getAllVeXe();
        return view('admin.qlvx',['ds_ve_xe'=>$ds_ve_xe]);
    }

    protected function showDSVeXeTheoLichTrinhView($id){
        $ds_ve_xe = VeXe::getAllVeXeTheoLichTrinh($id);
        return view('admin.qlvx',['ds_ve_xe'=>$ds_ve_xe]);
    }

    public function showViewChiTietVeXe($id){
        $ve_xe = VeXe::getVeXeById($id);
        return view('admin.qlvx_detail',['ve_xe'=>$ve_xe]);
    }
}
