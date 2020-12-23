<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    public $timestamps = false;


    /* METODE INSERT DATA MELALUI MODEL - Arrray Asosiatif */
    /* harus tuliskan field mana saja yg boleh diisi */
    protected $fillable = ['mahasiswa_nama', 'mahasiswa_jurusan', 'mahasiswa_email'];
}
