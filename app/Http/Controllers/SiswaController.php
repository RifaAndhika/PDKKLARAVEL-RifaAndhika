<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
        $data_siswa = \App\Siswa::all();
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }


    public function Create(Request $request){

           \App\Siswa::Create($request->all());

           return redirect('/siswa')->with('sukses','Data Berhasil Ditambah');

    }

    public function Edit($id) {


          $siswa = \App\Siswa::find($id);

           return view ('siswa/edit',['siswa' => $siswa]);


    }

    public function Update(Request $request,$id){

        $siswa = \App\Siswa::find($id);

        $siswa->update($request->all());

        return redirect('/siswa')->with('sukses', 'Data Berhasil di Update');


    }

}
