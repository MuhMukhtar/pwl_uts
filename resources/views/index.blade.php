@extends('layouts.app')
    @section('table')
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
          <tr class="bg-secondary text-white">
              {{-- @foreach ($collection as $item)
                  
              @endforeach --}}
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
        </tbody>
      </table>
    @endsection