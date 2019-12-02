<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xe;
use App\LoaiXe;
use App\HangXe;

class XeController extends Controller
{
    public function showDSXeView(){
        $ds_xe = Xe::getAllXe();
        return view('admin.qlx',['ds_xe'=>$ds_xe]);
    }

    public function showDSXeTheoHangView($id){
        $ds_xe = Xe::getAllXeTheoHang($id);
        return view('admin.qlx',['ds_xe'=>$ds_xe]);
    }

    public function showViewThemXe(){
        $ds_hang_xe = HangXe::getAllHangXe();
        $ds_loai_xe = LoaiXe::getAllLoaiXe();
        return view('admin.qlx_add',['ds_hang_xe'=>$ds_hang_xe,
                                    'ds_loai_xe'=>$ds_loai_xe]);
    }

    public function showViewChiTietXe($id){
        $xe=Xe::getXeById($id);
        return view('admin.qlx_detail',['xe'=>$xe]);
    }

    public function showViewSuaXe($id){
        $ds_hang_xe = HangXe::getAllHangXe();
        $ds_loai_xe = LoaiXe::getAllLoaiXe();
        $xe=Xe::getXeById($id);
        return view('admin.qlx_edit',['xe'=>$xe,
                                    'ds_hang_xe'=>$ds_hang_xe,
                                    'ds_loai_xe'=>$ds_loai_xe]);
    }

    protected function batSuKienClickButton(Request $request){
        if (isset($request->btnThem)){
            $this->themXe($request);
            return redirect('admin/them-xe')->with('thongbao','Thêm thành công');
        }

        if (isset($request->btnLuu)){
            $SoXe = $request->SoXe;
            $this->suaXe($request);
            return redirect('admin/sua-xe/'.$SoXe)->with('thongbao','Sửa thành công');
        }
    }

    public function themXe($request){
        $this->validate(
            $request,
            ['SoXe'=>'required',
            'IDLoaiXe'=>'required',
            'IDHangXe'=>'required'],

            ['SoXe.required'=>"Bạn chưa nhập số xe",
            'LoaiXe.required'=>"Bạn chưa chọn loại xe",
            'HangXe.required'=>"Bạn chưa chọn hãng xe"]
        );

        $xe = new Xe;
        $xe->SoXe= $request->SoXe;
        $xe->IDLoaiXe= $request->IDLoaiXe;
        $xe->IDHangXe= $request->IDHangXe;
        $xe->MoTa= $request->MoTa;
        $xe->save();
    }

    public function suaXe($request){
        $this->validate(
            $request,
            ['SoXe'=>'required',
            'IDLoaiXe'=>'required',
            'IDHangXe'=>'required'],

            ['SoXe.required'=>"Bạn chưa nhập số xe",
            'LoaiXe.required'=>"Bạn chưa chọn loại xe",
            'HangXe.required'=>"Bạn chưa chọn hãng xe"]
        );

        $xe = Xe::find($request->SoXe);
        $xe->IDLoaiXe= $request->IDLoaiXe;
        $xe->IDHangXe= $request->IDHangXe;
        $xe->MoTa= $request->MoTa;
        $xe->save();
    }
}
