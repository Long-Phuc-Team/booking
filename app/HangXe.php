<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class HangXe extends Model
{
    protected $table = 'hangxe';
    protected $primaryKey = 'IDHangXe';
    public $timestamps = true;

    public static function getAllHangXe(){
        $data = DB::table('hangxe')
                    ->get();

        return $data;
    }

    public static function getHangXeById($IDHangXe){
        $data = DB::table('hangxe')
                    ->where('IDHangXe','=',$IDHangXe)
                    ->first();

        return $data;
    }
}
