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

    public function showViewThemHangXe(){
        return view('admin.qlhx_add');
    }

    protected function batSuKienClickButton(Request $request){
        if (isset($request->btnThem)){
            $this->themHangXe($request);
            return redirect('admin/them-hang-xe')->with('thongbao','Thêm thành công');
        }
    }

    public function themHangXe($request){
        $this->validate(
            $request,
            ['TenHangXe'=>'required',
            'DienThoai'=>'required'],

            ['TenHangXe.required'=>"Bạn chưa nhập tên chứng chỉ",
            'DienThoai.required'=>"Bạn chưa nhập số điện thoại"]
        );

        $hang_xe = new HangXe;
        $hang_xe->TenHangXe= $request->TenHangXe;
        $hang_xe->DienThoai= $request->DienThoai;
        $hang_xe->MoTa= $request->MoTa;

        echo $request->TenHangXe;
        $hangxe->save();
    }
}
