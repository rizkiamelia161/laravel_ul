<?php

namespace App\Http\Controllers;
use App\Models\DataSiswa;
use App\Models\DataGuru;

use Illuminate\Http\Request;

class SiswasController extends Controller
{
    public function index(){
        $dtSiswa = DataSiswa::with(['dataguru'])->get();
        return view('siswas', ['siswa' => $dtSiswa]);
    }

    public function createview(){
        $dtGuru = DataGuru::get();
        return view('createsiswa', ['guru' => $dtGuru]);
    }

    public function createsave(Request $request){
        $dtSiswa = Datasiswa::create([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => $request->password,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'id_guru' => $request->id_guru
        ]);

        if($dtSiswa){
            //redirect dengan pesan sukses
            return redirect()->route('admin.siswa.view')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
            //redirect dengan pesan error
            return redirect()->route('admin.siswa.view')->with(['error' => 'Data Gagal Disimpan!']);
         }
    }

    public function hapussiswa($id){
        $dtSiswa = DataSiswa::findOrFail($id);

        $dtSiswa->delete();

        if($dtSiswa){
            //redirect dengan pesan sukses
            return redirect()->route('admin.siswa.view')->with(['success' => 'Data Berhasil Disimpan!']);
         }else{
            //redirect dengan pesan error
            return redirect()->route('admin.siswa.view')->with(['error' => 'Data Gagal Disimpan!']);
         }
    }
}
