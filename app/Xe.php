<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Xe extends Model
{
    protected $table = 'xe';
    protected $primaryKey = 'SoXe';
    public $timestamps = true;

    public static function getAllXe(){
        $data = DB::table('xe')
                ->join('hangxe','hangxe.IDHangXe','=','xe.IDHangXe')
                ->join('loaixe','loaixe.IDLoaiXe','=','xe.IDLoaiXe')
                ->select('SoXe',
                        'TenHangXe',
                        'TenLoaiXe',
                        'SoGhe',
                        'xe.MoTa',
                        'xe.created_at',
                        'xe.updated_at')
                ->get();

        return $data;
    }

    public static function getAllXeTheoHang($IDHangXe){
        $data = DB::table('xe')
                ->join('hangxe','hangxe.IDHangXe','=','xe.IDHangXe')
                ->join('loaixe','loaixe.IDLoaiXe','=','xe.IDLoaiXe')
                ->where('xe.IDHangXe','=',$IDHangXe)
                ->select('SoXe',
                        'TenHangXe',
                        'TenLoaiXe',
                        'SoGhe',
                        'xe.MoTa',
                        'xe.created_at',
                        'xe.updated_at')
                ->get();

        return $data;
    }

    public static function getXeById($SoXe){
        $data = DB::table('xe')
                ->join('hangxe','hangxe.IDHangXe','=','xe.IDHangXe')
                ->join('loaixe','loaixe.IDLoaiXe','=','xe.IDLoaiXe')
                ->where('xe.SoXe','=',$SoXe)
                ->select('SoXe',
                        'TenHangXe',
                        'xe.IDHangXe',
                        'xe.IDLoaiXe',
                        'TenLoaiXe',
                        'SoGhe',
                        'xe.MoTa',
                        'xe.created_at',
                        'xe.updated_at')
                ->first();

        return $data;
    }
}
