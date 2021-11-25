<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\motor;

class motorController extends KendaraanController {

  public function index() {
    return Motor::all();
  }

  public function create(Requestn $request) {
    $motor = new Motor;
    $motor->mesin = $request->mesin;
    $motor->tipe_suspensi = $request->tipe_suspensi;
    $motor->tipe_transmisi = $request->tipe_transmisi;
    $siswa->save();

    return "data berhasil ditambahkan";
  }

  public function update(Request $request, $id) {
    $mesin = $request->mesin;
    $tipe_suspensi = $request->tipe_suspensi;
    $tipe_transmisi = $request->tipe_transmisi;

    $motor = motor::find($id);
    $motor->mesin = $mesin;
    $motor->tipe_suspensi = $tipe_suspensi;
    $motor->tipe_transmisi = $tipe_transmisi;
    $motor->save();

    return "Data berhasil diupdate";
  }

  public function delete($id) {
    $motor = Motor::find($id);
    $motor->delete();

    return "Data berhasil dihapus";
  }
}