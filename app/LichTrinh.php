<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class LichTrinh extends Model
{
    protected $table = 'lichtrinh';
    protected $primaryKey = 'IDLichTrinh';
    public $timestamps = true;

    public static function getAllLichTrinh(){
        $data = DB::table('lichtrinh')
                    ->join('tuyen','tuyen.IDTuyen','=','lichtrinh.IDTuyen')
                    ->join('xe','xe.SoXe','=','lichtrinh.SoXe')
                    ->select('IDLichTrinh',
                            'TenTuyen',
                            'lichtrinh.SoXe',
                            'GioDi',
                            'GioDen',
                            'NgayDi',
                            'lichtrinh.MoTa',
                            'lichtrinh.created_at',
                            'lichtrinh.updated_at')
                    ->get();

        return $data;
    }

    public static function getAllLichTrinhTheoTuyen($IDTuyen){
        $data = DB::table('lichtrinh')
                    ->join('tuyen','tuyen.IDTuyen','=','lichtrinh.IDTuyen')
                    ->join('xe','xe.SoXe','=','lichtrinh.SoXe')
                    ->where('lichtrinh.IDTuyen','=',$IDTuyen)
                    ->select('IDLichTrinh',
                            'TenTuyen',
                            'lichtrinh.SoXe',
                            'GioDi',
                            'GioDen',
                            'NgayDi',
                            'lichtrinh.MoTa',
                            'lichtrinh.created_at',
                            'lichtrinh.updated_at')
                    ->get();

        return $data;
    }

    public static function getLichTrinhById($IDLichTrinh){
        $data = DB::table('lichtrinh')
                    ->join('tuyen','tuyen.IDTuyen','=','lichtrinh.IDTuyen')
                    ->join('xe','xe.SoXe','=','lichtrinh.SoXe')
                    ->join('hangxe','hangxe.IDHangXe','=','xe.IDHangXe')
                    ->where('lichtrinh.IDLichTrinh','=',$IDLichTrinh)
                    ->select('IDLichTrinh',
                            'TenTuyen',
                            'lichtrinh.IDTuyen',
                            'lichtrinh.SoXe',
                            'xe.IDHangXe',
                            'hangxe.TenHangXe',
                            'GioDi',
                            'GioDen',
                            'NgayDi',
                            'lichtrinh.MoTa',
                            'lichtrinh.created_at',
                            'lichtrinh.updated_at',
                            'lichtrinh.GiaVe')
                    ->first();

        return $data;
    }
}
