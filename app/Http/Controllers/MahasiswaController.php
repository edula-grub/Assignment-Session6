<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function cekObject(){
        $mahasiswa = new Mahasiswa();

        dump($mahasiswa);
    }
    public function insert(){
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = '2602189833';
        $mahasiswa->nama = 'Yohanna Yonathan';
        $mahasiswa->tanggal_lahir = '2004-12-05';
        $mahasiswa->ipk = 3.7;
        $mahasiswa->save();

    }
    public function update(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->tanggal_lahir = '2001-12-31';
        $mahasiswa->ipk = 2;
        $mahasiswa->save();
     
        dump($mahasiswa);
    }

    public function delete(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa->delete();
              
        dump($mahasiswa);
       }

       public function allView(){
        $mahasiswas = Mahasiswa::all();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswas]);
       }

       public function viewIpk(){
        $mahasiswas = Mahasiswa::where('ipk','<','3.6')
         ->orderBy('nama', 'desc')
         ->get();
        return view('tampil-mahasiswa',['mahasiswas' => $mahasiswas]);
       }
     
     
     
}
