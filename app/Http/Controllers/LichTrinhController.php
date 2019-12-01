<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LichTrinh;

class LichTrinhController extends Controller
{
    public function showDSLichTrinhView(){
        $ds_lich_trinh = LichTrinh::getAllLichTrinh();
        return view('admin.qllt',['ds_lich_trinh'=>$ds_lich_trinh]);
    }
}
