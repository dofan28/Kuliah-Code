<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeetingController extends Controller
{
    public function index()
    {
        // mengambil data dari table meeting
        $meeting = DB::table('meeting')->get();

        // mengirim data pegawai ke view index
        return view('Rapat.Meeting.index', ['meeting' => $meeting]);
    }
    public function cetakMeeting()
    {
        $cetakMeeting = DB::table('meeting')->get();
        
        return view('Rapat.Meeting.cetakMeeting', compact('cetakMeeting'));
    }

    // method untuk menampilkan view form tambah meeting
    public function tambah()
    {
        $ruangan = DB::table('ruangan')->get();
        // memanggil view tambah
        return view('Rapat.Meeting.tambah', ['ruangan' => $ruangan]);
    }

    // method untuk insert data ke table meeting
    public function store(Request $request)
    {
        // insert data ke table meeting
        DB::table('meeting')->insert([
            'IDruang' => $request->IDruang,
            'judulM' => $request->judulM,
            'keterangan' => $request->keterangan,
            'tgl' => $request->tgl,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_berakhir' => $request->waktu_berakhir
        ]);

        // alihkan halaman ke halaman meeting
        return redirect('/meeting');
    }

    // method untuk edit data meeting
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $ruangan = DB::table('ruangan')->get();
        $meeting = DB::table('meeting')->where('IDmeating', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('Rapat.Meeting.edit', ['meeting' => $meeting, 'ruangan' => $ruangan]);
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('meeting')->where('IDmeating', $request->id)->update([
            'IDruang' => $request->IDruang,
            'judulM' => $request->judulM,
            'keterangan' => $request->keterangan,
            'tgl' => $request->tgl,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_berakhir' => $request->waktu_berakhir
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/meeting');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('meeting')->where('IDmeating', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/meeting');
    }

    // method menampilkan grafik meeting
    public function grafik()
    {
        $meeting = DB::table('meeting')
            ->selectRAW('year(tgl) as tahun, count(IDmeating)as jumlah')
            ->groupBy('tahun')
            ->get();

            // dd($meeting);

        return view('grafik', compact('meeting'));
    }
}
