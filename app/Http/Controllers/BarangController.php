<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barangs = Barang::paginate(20);
        return view('barang.index', compact('barangs'));
    }

    public function barang($id)
    {
        $barang = Barang::where('id', $id)->first();
        return view('barang.edit', compact('barang'));
    }

    public function daftar_pesanan()
    {
        $daftar_pesanans = Pesanan::paginate(20);
        return view('barang.daftar_pesanan', compact('daftar_pesanans'));
    }

    public function daftar_pesanan_update(Request $request, $id)
    {
        $daftar_pesanan = Pesanan::findorfail($id);
        $daftar_pesanan->update($request->all());

        Alert::success('Status Pesanan Sukses Diupdate', 'Success');
        return redirect('daftar-pesanan');
    }

    public function update(Request $request, $id)
    {
        $update_barang = Barang::findorfail($id);
        $update_barang->update($request->all());

        Alert::success('Barang Sukses Diupdate', 'Success');
        return redirect('daftar-barang');
    }

    public function add()
    {
        return view('barang.add');
    }
}
