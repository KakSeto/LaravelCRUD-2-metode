<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
 
class DosenController extends Controller
{
    public function index(){
        $nama = "Seto Aji Nugroho";

        $matkul = ["Kalkulus", "Machine Learning","Deep Learning"];

    	return view('biodata', ['nama' => $nama, 'matkul'=> $matkul]);
    }

   
}