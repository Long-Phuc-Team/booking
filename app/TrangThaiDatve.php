<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TrangThaiDatve extends Model
{
    protected $table = 'trangthaidatve';
    protected $primaryKey = 'IDTTDV';
    public $timestamps = false;

    public static function getAllTrangThaiDatVe(){
        $data = DB::table('trangthaidatve')
                ->join('lichtrinh','lichtrinh.IDLichTrinh','=','trangthaidatve.IDLichTrinh')
                ->join('tuyen','tuyen.IDTuyen','=','lichtrinh.IDTuyen')
                ->select('IDTTDV',
                        'TenTuyen',
                        'GioDi',
                        'NgayDi',
                        'Ghe',
                        'TrangThai')
                ->get();

        return $data;
    }

    public static function getAllTrangThaiDatVeTheoLichTrinh($idLichTrinh){
        $data = DB::table('trangthaidatve')
                ->join('lichtrinh','lichtrinh.IDLichTrinh','=','trangthaidatve.IDLichTrinh')
                ->join('tuyen','tuyen.IDTuyen','=','lichtrinh.IDTuyen')
                ->where('trangthaidatve.IDLichTrinh','=',$idLichTrinh)
                ->select('IDTTDV',
                        'TenTuyen',
                        'GioDi',
                        'NgayDi',
                        'Ghe',
                        'TrangThai')
                ->get();

        return $data;
    }
}
