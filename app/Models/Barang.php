<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //Model Eloq

class Barang extends Model
{
    // use HasFactory;

    protected $table='barang'; //Eloquent akan membuat model mahasiswa menyimpan record di table mahasiswas
    public $timestamps=false;
    protected $primaryKey='id_barang'; //Mengambil isi DB dengan primaryKey

    protected $fillable = [
        'id_barang',
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga_barang',
        'qty_barang'
    ];
}
