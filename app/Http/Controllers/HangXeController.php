<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HangXe;

class HangXeController extends Controller
{
    public function showDSHangXeView(){
        $ds_hang_xe = HangXe::getAllHangXe();
        return view('admin.qlhx',['ds_hang_xe'=>$ds_hang_xe]);
    }
}
