<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Mobil extends Eloquent
{
  protected $connection = 'penjualan_kendaraan';
  protected $collection = 'mobil';
    
  protected $fillable = [
    'mesin', 'kapasitas_penumpang','tipe'
  ];
}