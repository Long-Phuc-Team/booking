<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LoaiXe extends Model
{
    protected $table = 'loaixe';
    protected $primaryKey = 'IDLoaiXe';
    public $timestamps = true;

    public static function getAllLoaiXe(){
        $data = DB::table('loaixe')
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
}
