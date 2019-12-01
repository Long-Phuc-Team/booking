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
}
