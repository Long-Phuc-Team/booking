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

    public function showViewSuaHangXe($id){
        $hang_xe = HangXe::getHangXeById($id);
        return view('admin.qlhx_edit',['hang_xe'=>$hang_xe]);
    }

    protected function batSuKienClickButton(Request $request){
        if (isset($request->btnThem)){
            $this->themHangXe($request);
            return redirect('admin/them-hang-xe')->with('thongbao','Thêm thành công');
        }

        if (isset($request->btnLuu)){
            $IDHangXe = $request->IDHangXe;
            $this->suaHangXe($request);
            return redirect('admin/sua-hang-xe/'.$IDHangXe)->with('thongbao','Sửa thành công');
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
        $hang_xe->save();
    }

    public function suaHangXe($request){
        $this->validate(
            $request,
            ['TenHangXe'=>'required',
            'DienThoai'=>'required'],

            ['TenHangXe.required'=>"Bạn chưa nhập tên chứng chỉ",
            'DienThoai.required'=>"Bạn chưa nhập số điện thoại"]
        );

        $hang_xe = HangXe::find($request->IDHangXe);
        $hang_xe->TenHangXe= $request->TenHangXe;
        $hang_xe->DienThoai= $request->DienThoai;
        $hang_xe->MoTa= $request->MoTa;
        $hang_xe->save();
    }
}
