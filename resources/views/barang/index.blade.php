@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2">
            <img src="{{ url('images/logo.png') }}" width="700" alt="Logo Atria Batik" class="rounded mx-auto d-block">
        </div>
        <div class="col-md4 mb-4">
            <a href="{{ url('tambah-barang') }}" class="btn btn-info"><i class="fa fa-plus"></i> Tambah</a>
        </div>
        @foreach ($barangs as $barang)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ url('uploads') }}/{{ $barang->gambar }}" alt="{{ $barang->gambar }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                        <p class="card-text">
                            <strong>Harga : </strong>Rp. {{ number_format($barang->harga) }} <br>
                            <strong>Stok : </strong> {{ $barang->stok }} <br>
                            <hr>
                            <strong>Keterangan : </strong> <br>
                            {{ $barang->keterangan }}
                        </p>
                        <a href="{{ url('daftar-barang') }}/{{ $barang->id }}" class="btn btn-primary"><i class="fa fa-pencil-alt"></i> Edit</a>
                        <a href="{{ url('daftar-barang') }}/{{ $barang->id }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
