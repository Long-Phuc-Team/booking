<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class TuyenXe extends Model
{
    protected $table = 'tuyen';
    protected $primaryKey = 'IDTuyen';
    public $timestamps = true;

    public static function getAllTuyenXe(){
        $data = DB::table('tuyen')
                        ->get();

        return $data;
    }

    public static function getTuyenXeById($IDTuyen){
        $data = DB::table('tuyen')
                        ->where('IDTuyen','=',$IDTuyen)
                        ->first();

        return $data;
    }
}
