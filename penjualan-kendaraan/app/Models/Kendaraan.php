<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Kendaraan extends Eloquent
{
  protected $connection = 'penjualan_kendaraan';
  protected $collection = 'kendaraan';
    
  protected $fillable = [
    'tahun_keluaran', 'warna','harga'
  ];
}