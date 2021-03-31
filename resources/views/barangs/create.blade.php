@extends('layouts.app')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Barang
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('barang.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="kode_barang" name="kode_barang" class="form-control" id="kode_barang"
                                aria-describedby="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="nama_barang" name="nama_barang" class="form-control" id="nama_barang"
                                aria-describedby="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="kategori_barang">Kategori Barang</label>
                            <input type="kategori_barang" name="kategori_barang" class="form-control" id="kategori_barang"
                                aria-describedby="kategori_barang">
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga</label>
                            <input type="harga_barang" name="harga_barang" class="form-control" id="harga_barang"
                                aria-describedby="harga_barang">
                        </div>
                        <div class="form-group">
                            <label for="qty_barang">QTY</label>
                            <input type="qty_barang" name="qty_barang" class="form-control" id="qty_barang"
                                aria-describedby="qty_barang">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
