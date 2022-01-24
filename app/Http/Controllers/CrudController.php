<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    //tampilkan data
    public function index()
    {
        $user= DB::table('user')->paginate(5);
        return view('layouts.crud',['user'=> $user]);
    }
    //tambah data
    public function tambah()
    {
        return view('tambah');
    }
    //simpan data
    public function simpan(Request $request)
    {
        DB::insert('insert into user (nama,nim,alamat) values (?,?,?)', [$request->nama,$request->nim,$request->alamat ]);
    }
    //hapus data
    public function hapus($id)
    {
        return view();
    }
}
