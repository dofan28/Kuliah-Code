<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuanganController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $ruangan = DB::table('ruangan')->get();

        // mengirim data pegawai ke view index
        return view('Rapat.Ruangan.index', ['ruangan' => $ruangan]);
    }

    public function cetakRuangan()
    {
        $cetakRuangan = DB::table('ruangan')->get();

        return view('Rapat.Ruangan.cetakRuangan', compact('cetakRuangan'));
    }


    // method untuk menampilkan view form tambah ruangan
    public function tambah()
    {
        // memanggil view tambah
        return view('Rapat.Ruangan.tambah');
    }

    // method untuk insert data ke table ruangan
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('ruangan')->insert([
            'nama_ruang' => $request->nama_ruang,
            'lantai' => $request->lantai
        ]);
        // alihkan halaman ke halaman ruangan
        return redirect('/ruangan');
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $ruangan = DB::table('ruangan')->where('IDruang', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('Rapat.Ruangan.edit', ['ruangan' => $ruangan]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('ruangan')->where('IDruang', $request->id)->update([
            'nama_ruang' => $request->nama_ruang,
            'lantai' => $request->lantai
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/ruangan');
    }


    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('ruangan')->where('IDruang', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/ruangan');
    }
}
