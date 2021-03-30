<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // return view('barang', ['barangs' => Barang::barang()]);
        // fungsi eloquent menampilkan data menggunakan pagination
        $barangs = Barang::all(); // Mengambil semua isi tabel
        $posts = Barang::orderBy('id_barang', 'desc')->paginate(6);
        return view('barang', compact('barangs'));
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('barangs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan'=> 'required',
            'no_handphone' => 'required'
        ]);

        // fungsi eloquent untuk menambahkan data
        Barang::create($request->all());

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('barang.index')
            ->with('success', 'Barang Berhasil Ditambahkan');
    }

    public function show($id_barang)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Barang = Barang::find($id_barang);
        return view('barangs.detail', compact('Barang'));
    }

    public function edit($id_barang)
    {
        $Barang = Barang::find($id_barang);
        return view('barangs.edit', compact('Barang'));
    }

    public function update(Request $request, $id_barang)
    {
        //melakukan validasi data
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga_barang' => 'required',
            'qty_barang' => 'required'
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita
        Barang::find($id_barang)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('barangs.index')
            ->with('success', 'Barang Berhasil Diupdate');
    }

    public function destroy($id_barang)
    {
        Barang::find($id_barang)->delete();
        return redirect()->route('barangs.index')
            ->with('success', 'Barang Berhasil Dihapus');
    }
}
