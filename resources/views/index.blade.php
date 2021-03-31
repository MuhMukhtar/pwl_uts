@extends('layouts.app')

@section('content')
    <a class="btn btn-outline-success" href="{{ route('barang.create') }}"> Input Barang</a>
    <br><br>
    <table class="table">
        <thead>
            <tr class="bg-primary text-white">
                <th scope="col">Id Barang</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Kategori Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Qty</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $item)
                <tr class="bg-secondary text-white">
                    <th scope="row">{{ $item->id_barang }}</th>
                    <td>{{ $item->kode_barang }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->kategori_barang }}</td>
                    <td>{{ $item->harga_barang }}</td>
                    <td>{{ $item->qty_barang }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('barang.edit', $item->id_barang) }}">Edit</a>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure want to delete ?')"
                            href="{{ route('barang.destroy', $item->id_barang) }}"><i class="fa fa-trash">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
