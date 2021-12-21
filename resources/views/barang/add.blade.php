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
                    <li class="breadcrumb-item active" aria-current="page">Tambah Barang</li>
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
                        {{-- <div class="col-md-6">
                            <img src="" width="100%" class="rounded mx-auto d-block" alt="">
                        </div> --}}
                        <div class="col-12 mt-5">
                            {{-- <h2>{{ $barang->nama_barang }}</h2> --}}
                            <table class="table">
                                <tbody>
                                    <form action="" method="POST">
                                        @csrf
                                        <tr>
                                            <td>Nama Barang</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="nama_barang" class="form-control" value="" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>
                                                <input type="number" name="harga" class="form-control" value="" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Stok</td>
                                            <td>:</td>
                                            <td>
                                                <input type="number" name="stok" class="form-control" value="" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Keterangan</td>
                                            <td>:</td>
                                            <td>
                                                <input type="text" name="keterangan" class="form-control" value="" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gambar</td>
                                            <td>:</td>
                                            <td>
                                                <input type="file" name="gambar" class="form-control" value="" required>
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
