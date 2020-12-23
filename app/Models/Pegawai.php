<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    /* Karena aturan default laravel yaitu : Tabel jamak, model singular, maka aneh jika nama tabelnya Pegawais
    maka dari itu kita butuh custom sendiri
    Jika ikuti aturan default, maka tidak perlu ubah2 nama untuk model dan tabel
    akan tetapi jika custom butuh aturan seperti ini

    beri tau laravel jika model ini, itu koneksinya dengan tabel mahasiswa */

    protected $table = 'pegawai';
}
