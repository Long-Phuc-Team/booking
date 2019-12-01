<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiXe extends Model
{
    protected $table = 'loaixe';
    protected $primaryKey = 'IDLoaiXe';
    public $timestamps = false;
}
