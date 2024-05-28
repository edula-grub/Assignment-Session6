<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
class PageController extends Controller
{	 
public function index(){		
 return "Halaman Home";	 
}	 
public function tampil(){		
    $arrMahasiswa = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo", "Lisa Permata"];		
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);	 
}
}
