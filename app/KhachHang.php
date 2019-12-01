<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class KhachHang extends Model
{
    protected $table = 'khachhang';
    protected $primaryKey = 'IDKhachHang';
    public $timestamps = false;

    public static function getAllKhachHang(){
        $data = DB::table('khachhang')
                    ->get();

        return $data;
    }
}
