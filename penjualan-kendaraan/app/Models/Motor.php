<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Motor extends Eloquent
{
  protected $connection = 'penjualan_kendaraan';
  protected $collection = 'motor';
    
  protected $fillable = [
    'mesin', 'tipe_suspensi','tipe_transmisi'
  ];
}