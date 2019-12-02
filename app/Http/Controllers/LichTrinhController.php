<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LichTrinh;
use App\TuyenXe;
use App\HangXe;
use App\Xe;

class LichTrinhController extends Controller
{
    public function showDSLichTrinhView(){
        $ds_lich_trinh = LichTrinh::getAllLichTrinh();
        return view('admin.qllt',['ds_lich_trinh'=>$ds_lich_trinh]);
    }

    public function showDSLichTrinhTheoTuyenView($id){
        $ds_lich_trinh = LichTrinh::getAllLichTrinhTheoTuyen($id);
        return view('admin.qllt',['ds_lich_trinh'=>$ds_lich_trinh]);
    }

    public function showViewThemLichTrinh(){
        $ds_tuyen_xe = TuyenXe::getAllTuyenXe();
        $ds_hang_xe = HangXe::getAllHangXe();
        return view('admin.qllt_add',['ds_tuyen_xe'=>$ds_tuyen_xe,
                                        'ds_hang_xe'=>$ds_hang_xe]);
    }

    public function showViewSuaLichTrinh($id){
        $lich_trinh = LichTrinh::getLichTrinhById($id);
        return view('admin.qllt_edit',['lich_trinh'=>$lich_trinh]);
    }

    public function showViewChiTietLichTrinh($id){
        $lich_trinh = LichTrinh::getLichTrinhById($id);
        return view('admin.qllt_detail',['lich_trinh'=>$lich_trinh]);
    }

    protected function batSuKienClickButton(Request $request){
        if (isset($request->btnThem)){
            $this->themLichTrinh($request);
            return redirect('admin/them-lich-trinh')->with('thongbao','Thêm thành công');
        }

        if (isset($request->btnLuu)){
            $IDLichTrinh = $request->IDLichTrinh;
            $this->suaLichTrinh($request);
            return redirect('admin/sua-lich-trinh/'.$IDLichTrinh)->with('thongbao','Sửa thành công');
        }
    }

    public function themLichTrinh($request){
        $this->validate(
            $request,
            ['GioDi'=>'required',
            'GioDen'=>'required',
            'IDTuyen'=>'required',
            'SoXe'=>'required',
            'NgayDi'=>'required',
            'GiaVe'=>'required'],

            ['GioDi.required'=>"Bạn chưa nhập giờ đi",
            'GioDen.required'=>"Bạn chưa nhập giờ đến",
            'NgayDi.required'=>"Bạn chưa chọn ngày đi",
            'IDTuyen.required'=>"Bạn chưa chọn tuyến",
            'SoXe.required'=>"Bạn chưa chọn xe",
            'GiaVe.required'=>"Bạn chưa nhập giá vé"]
        );

        $lich_trinh = new LichTrinh;
        $lich_trinh->IDTuyen= $request->IDTuyen;
        $lich_trinh->SoXe= $request->SoXe;
        $lich_trinh->GioDi= $request->GioDi.':00';
        $lich_trinh->GioDen= $request->GioDen.':00';
        $lich_trinh->NgayDi= $request->NgayDi;
        $lich_trinh->GiaVe= $request->GiaVe;
        $lich_trinh->MoTa= $request->MoTa;
        $lich_trinh->save();
    }

    public function suaLichTrinh($request){
        $this->validate(
            $request,
            ['DiemDi'=>'required',
            'DiemDen'=>'required',
            'TenLichTrinh'=>'required'],

            ['DiemDi.required'=>"Bạn chưa nhập điểm đi",
            'DiemDen.required'=>"Bạn chưa nhập điểm đến",
            'TenLichTrinh.required'=>"Bạn chưa nhập tên tuyến"]
        );

        $lich_trinh = LichTrinh::find($request->IDLichTrinh);
        $lich_trinh->TenLichTrinh= $request->TenLichTrinh;
        $lich_trinh->DiemDi= $request->DiemDi;
        $lich_trinh->DiemDen= $request->DiemDen;
        $lich_trinh->DoDai= $request->DoDai;
        $lich_trinh->ThoiGian= $request->ThoiGian;
        $lich_trinh->MoTa= $request->MoTa;
        $lich_trinh->save();
    }

    //Load cbx xe
    public function loadCbxXeTheoHang($id){
        $ds_xe = Xe::getAllXeTheoHang($id);
        echo '<option value="">Chọn xe</option>';
        foreach($ds_xe as $xe){
            echo '<option value="'.$xe->SoXe.'">'.$xe->SoXe.'</option>';
        }
    }
}
