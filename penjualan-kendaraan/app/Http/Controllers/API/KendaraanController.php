<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller {

  public function index() {
    return Kendaraan::all();
  }

  public function create(Requestn $request) {
    $kendaraan = new Kendaraan;
    $kendaraan->tahun_keluaran = $request->tahun_keluaran;
    $kendaraan->warna = $request->warna;
    $kendaraan->harga = $request->harga;
    $siswa->save();

    return "data berhasil ditambahkan";
  }

  public function update(Request $request, $id) {
    $tahun_keluaran = $request->tahun_keluaran;
    $warna = $request->warna;
    $harga = $request->harga;

    $kendaraan = Kendaraan::find($id);
    $kendaraan->tahun_keluaran = $tahun_keluaran;
    $kendaraan->warna = $warna;
    $kendaraan->harga = $harga;
    $kendaraan->save();

    return "Data berhasil diupdate";
  }

  public function delete($id) {
    $kendaraan = Kendaraan::find($id);
    $kendaraan->delete();

    return "Data berhasil dihapus";
  }
}