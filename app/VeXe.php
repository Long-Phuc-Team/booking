<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class VeXe extends Model
{
    protected $table = 'vexe';
    protected $primaryKey = 'IDVeXe';
    public $timestamps = true;

    public static function getAllVeXe(){
        $data = DB::table('vexe')
                ->join('lichtrinh','lichtrinh.IDLichTrinh','=','vexe.IDLichTrinh')
                ->join('tuyen','tuyen.IDTuyen','=','lichtrinh.IDTuyen')
                ->join('khachhang','khachhang.IDKhachHang','=','vexe.IDKhachHang')
                ->select('IDVeXe',
                        'TenTuyen',
                        'TenKhachHang',
                        'lichtrinh.GiaVe',
                        'lichtrinh.NgayDi',
                        'lichtrinh.GioDi',
                        'vexe.Ghe',
                        'vexe.GiaVe',
                        'khachhang.DienThoai',
                        'vexe.created_at',
                        'vexe.updated_at')
                ->get();

        return $data;
    }

    public static function getAllVeXeTheoLichTrinh($IDLichTrinh){
        $data = DB::table('vexe')
                ->join('lichtrinh','lichtrinh.IDLichTrinh','=','vexe.IDLichTrinh')
                ->join('tuyen','tuyen.IDTuyen','=','lichtrinh.IDTuyen')
                ->join('khachhang','khachhang.IDKhachHang','=','vexe.IDKhachHang')
                ->where('vexe.IDLichTrinh','=',$IDLichTrinh)
                ->select('IDVeXe',
                        'TenTuyen',
                        'TenKhachHang',
                        'lichtrinh.GiaVe',
                        'lichtrinh.NgayDi',
                        'lichtrinh.GioDi',
                        'vexe.Ghe',
                        'vexe.GiaVe',
                        'khachhang.DienThoai',
                        'vexe.created_at',
                        'vexe.updated_at')
                ->get();

        return $data;
    }

    public static function getVeXeById($IDVeXe){
        $data = DB::table('vexe')
                ->join('lichtrinh','lichtrinh.IDLichTrinh','=','vexe.IDLichTrinh')
                ->join('tuyen','tuyen.IDTuyen','=','lichtrinh.IDTuyen')
                ->join('khachhang','khachhang.IDKhachHang','=','vexe.IDKhachHang')
                ->where('vexe.IDVeXe','=',$IDVeXe)
                ->select('IDVeXe',
                        'TenTuyen',
                        'TenKhachHang',
                        'lichtrinh.GiaVe',
                        'lichtrinh.NgayDi',
                        'lichtrinh.GioDi',
                        'vexe.Ghe',
                        'vexe.GiaVe',
                        'khachhang.DienThoai',
                        'Email',
                        'DiemDon',
                        'SoXe',
                        'vexe.MoTa',
                        'vexe.created_at',
                        'vexe.updated_at')
                ->first();

        return $data;
    }
}
