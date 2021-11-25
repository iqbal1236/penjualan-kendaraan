<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends KendaraanController {

  public function index() {
    return Mobil::all();
  }

  public function create(Requestn $request) {
    $mobil = new mobil;
    $mobil->mesin = $request->mesin;
    $mobil->kapasitas_penumpang = $request->kapasitas_penumpang;
    $mobil->tipe = $request->tipe;
    $siswa->save();

    return "data berhasil ditambahkan";
  }

  public function update(Request $request, $id) {
    $mesin = $request->mesin;
    $kapasitas_penumpang = $request->kapasitas_penumpang;
    $tipe = $request->tipe;

    $mobil = mobil::find($id);
    $mobil->mesin = $mesin;
    $mobil->kapasitas_penumpang = $kapasitas_penumpang;
    $mobil->tipe = $tipe;
    $mobil->save();

    return "Data berhasil diupdate";
  }

  public function delete($id) {
    $mobil = mobil::find($id);
    $mobil->delete();

    return "Data berhasil dihapus";
  }
}