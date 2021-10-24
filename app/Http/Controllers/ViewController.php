<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ViewController extends Controller
{
    public function index(){
        $hasil = DB::table('mahasiswa')->get();

        return view('index',['data_mhs'=>$hasil]);
        
    }
    public function prosesSimpan(Request $req){
        $nama = $req->nama_mhs;
        $nim = $req->nim_mhs;
        $kelas = $req->kls_mhs;
        $prodi = $req->prodi_mhs;
        $fakultas = $req->fakultas_mhs;
        
        DB::table('mahasiswa')->insert(
            ['nama_mahasiswa'=>$nama,
            'nim_mahasiswa'=>$nim,
            'kelas_mahasiswa'=>$kelas,
            'prodi_mahasiswa'=>$prodi,
            'fakultas_mahasiswa'=>$fakultas]
        );
        return redirect('/');
    }
    
  
        public function edit($id){
            $editData = DB::table('mahasiswa')->where('id',$id)->first();
            return view('edit',compact('editData'));
        }
    
    
    public function update(Request $req){
        DB::table('mahasiswa')->where('id',$req['id'])->update(
            ['nama_mahasiswa'=>$req['nama_mhs'],
            'nim_mahasiswa'=>$req['nim_mhs'],
            'kelas_mahasiswa'=>$req['kls_mhs'],
            'prodi_mahasiswa'=>$req['prodi_mhs'],
            'fakultas_mahasiswa'=>$req['fakultas_mhs'],
            
            ]
        );
        return redirect('/');
    }

    public function deleteData($id){
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/');
    }

}
