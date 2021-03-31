@extends('layouts.app')

    {{-- @section('addbutton')
    <a class="btn btn-outline-success" href="{{ route('barangs.create') }}"> Input Barang</a>
    @endsection --}}

    @section('content')
    <a class="btn btn-outline-success" href="{{ route('barangs.create') }}"> Input Barang</a>
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
            <th scope="row">{{$item->id_barang}}</th>
            <td>{{$item->kode_barang}}</td>
            <td>{{$item->nama_barang}}</td>
            <td>{{$item->kategori_barang}}</td>
            <td>{{$item->harga_barang}}</td>
            <td>{{$item->qty_barang}}</td>
            <td>
              <button type="button" class="btn btn-warning">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    @endsection