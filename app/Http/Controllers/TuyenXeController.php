<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TuyenXe;

class TuyenXeController extends Controller
{
    public function showDSTuyenXeView(){
        $ds_tuyen_xe = TuyenXe::getAllTuyenXe();
        return view('admin.qlt',['ds_tuyen_xe'=>$ds_tuyen_xe]);
    }

    public function showViewThemTuyenXe(){
        return view('admin.qlt_add');
    }

    public function showViewSuaTuyenXe($id){
        $tuyen_xe = TuyenXe::getTuyenXeById($id);
        return view('admin.qlt_edit',['tuyen_xe'=>$tuyen_xe]);
    }

    public function showViewChiTietTuyenXe($id){
        $tuyen_xe = TuyenXe::getTuyenXeById($id);
        return view('admin.qlt_detail',['tuyen_xe'=>$tuyen_xe]);
    }

    protected function batSuKienClickButton(Request $request){
        if (isset($request->btnThem)){
            $this->themTuyenXe($request);
            return redirect('admin/them-tuyen-xe')->with('thongbao','Thêm thành công');
        }

        if (isset($request->btnLuu)){
            $IDTuyenXe = $request->IDTuyen;
            $this->suaTuyenXe($request);
            return redirect('admin/sua-tuyen-xe/'.$IDTuyenXe)->with('thongbao','Sửa thành công');
        }
    }

    public function themTuyenXe($request){
        $this->validate(
            $request,
            ['DiemDi'=>'required',
            'DiemDen'=>'required'],

            ['DiemDi.required'=>"Bạn chưa nhập điểm đi",
            'DiemDen.required'=>"Bạn chưa nhập điểm đến"]
        );

        $tuyen_xe = new TuyenXe;
        $tuyen_xe->TenTuyen= $request->DiemDi .' - '. $request->DiemDen;
        $tuyen_xe->DiemDi= $request->DiemDi;
        $tuyen_xe->DiemDen= $request->DiemDen;
        $tuyen_xe->DoDai= $request->DoDai;
        $tuyen_xe->ThoiGian= $request->ThoiGian;
        $tuyen_xe->MoTa= $request->MoTa;
        $tuyen_xe->save();
    }

    public function suaTuyenXe($request){
        $this->validate(
            $request,
            ['DiemDi'=>'required',
            'DiemDen'=>'required',
            'TenTuyen'=>'required'],

            ['DiemDi.required'=>"Bạn chưa nhập điểm đi",
            'DiemDen.required'=>"Bạn chưa nhập điểm đến",
            'TenTuyen.required'=>"Bạn chưa nhập tên tuyến"]
        );

        $tuyen_xe = TuyenXe::find($request->IDTuyen);
        $tuyen_xe->TenTuyen= $request->TenTuyen;
        $tuyen_xe->DiemDi= $request->DiemDi;
        $tuyen_xe->DiemDen= $request->DiemDen;
        $tuyen_xe->DoDai= $request->DoDai;
        $tuyen_xe->ThoiGian= $request->ThoiGian;
        $tuyen_xe->MoTa= $request->MoTa;
        $tuyen_xe->save();
    }
}
