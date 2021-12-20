@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">            
            <div class="card">
                <div class="card-header">
                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                </div>                
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($daftar_pesanans as $daftar_pesanan)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $daftar_pesanan->tanggal }}</td>
                                    <form action="{{ url('pesan') }}/{{ $daftar_pesanan->id }}" method="POST">
                                        @csrf
                                        <td>
                                            <select class="form-select" aria-label="Default select example" name="status">
                                                @if($daftar_pesanan->status == 1)
                                                <option selected>Sudah Pesan & Belum dibayar</option>
                                                <option value="">Sudah dibayar</option>
                                                @else
                                                <option selected disabled>Sudah dibayar</option>
                                                @endif
                                            </select>
                                            {{-- @if($daftar_pesanan->status == 1)
                                            Sudah Pesan & Belum dibayar
                                            @else
                                            Sudah dibayar
                                            @endif --}}
                                        </td>
                                        <td>Rp. {{ number_format($daftar_pesanan->jumlah_harga+$daftar_pesanan->kode) }}</td>
                                        <td>
                                            {{-- <a href="{{ url('history') }}/{{ $daftar_pesanan->id }}" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</a> --}}
                                            <button type="submit" class="btn btn-primary" @if($daftar_pesanan->status == 1)
                                                 
                                                @else
                                                disabled
                                                @endif><i class="fa fa-save"></i> Simpan</button>
                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
