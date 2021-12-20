@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('daftar-barang') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('daftar-barang') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                {{-- <div class="card-header">
                    <h4>{{ $barang->nama_barang }}</h4>
                </div> --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('uploads') }}//{{ $barang->gambar }}" width="100%" class="rounded mx-auto d-block" alt="{{ $barang->gambar }}">
                        </div>
                        <div class="col-md-6 mt-5">
                            <h2>{{ $barang->nama_barang }}</h2>
                            <table class="table">
                                <tbody>
                                    <form action="{{ url('pesan') }}/{{ $barang->id }}" method="POST">
                                        @csrf
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="jumlah_pesan" class="form-control" value="{{ number_format($barang->harga) }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="jumlah_pesan" class="form-control" value="{{ number_format($barang->stok) }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="jumlah_pesan" class="form-control" value="{{ $barang->keterangan }}" required>
                                            </td>
                                        </tr>                                    
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td align="right">
                                                <button type="submit" class="btn btn-primary mt-2"><i class="fa fa-save"></i> Simpan</button>
                                            </td>                                            
                                        </tr>    
                                    </form>                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
