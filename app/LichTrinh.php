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
}
