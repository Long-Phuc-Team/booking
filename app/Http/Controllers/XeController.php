<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xe;

class XeController extends Controller
{
    public function showDSXeView(){
        $ds_xe = Xe::getAllXe();
        return view('admin.qlx',['ds_xe'=>$ds_xe]);
    }
}
