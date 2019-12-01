<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TuyenXe;

class TuyenXeController extends Controller
{
    public function showDSTuyenView(){
        $ds_tuyen = TuyenXe::getAllTuyenXe();
        return view('admin.qlt',['ds_tuyen'=>$ds_tuyen]);
    }
}
