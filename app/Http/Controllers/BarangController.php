<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pesanan;
use Illuminate\Http\Request;

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

    public function daftar_pesanan_update()
    {
        $daftar_pesanans = Pesanan::paginate(20);
        return view('barang.daftar_pesanan', compact('daftar_pesanans'));
    }
}
