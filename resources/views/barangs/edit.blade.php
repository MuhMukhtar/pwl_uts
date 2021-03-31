@extends('layouts.app')

@section('content')

    <div class="container mt-5">

        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Barang
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
                    <form method="post" action="{{ route('barang.update', $item->id_barang) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="id_barang">Id Barang</label>
                            <input type="text" name="id_barang" class="form-control" id="id_barang"
                                value="{{ $item->id_barang }}" aria-describedby="id_barang" disabled>
                        </div>
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="kode_barang" name="kode_barang" class="form-control" id="kode_barang"
                                value="{{ $item->kode_barang }}" aria-describedby="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama</label>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                                value="{{ $item->nama_barang }}" aria-describedby="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="harga_barang">Harga</label>
                            <input type="harga_barang" name="harga_barang" class="form-control" id="harga_barang"
                                value="{{ $item->harga_barang }}" aria-describedby="harga_barang">
                        </div>
                        <div class="form-group">
                            <label for="qty_barang">QTY</label>
                            <input type="qty_barang" name="qty_barang" class="form-control" id="qty_barang"
                                value="{{ $item->qty_barang }}" aria-describedby="qty_barang">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
