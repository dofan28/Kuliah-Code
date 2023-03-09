<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{
	public function index()
	{
		// mengambil data dari table pegawai
		$peserta = DB::table('peserta_rapat')->get();

		// mengirim data pegawai ke view index
		return view('Rapat.Peserta.index', ['peserta' => $peserta]);
	}

	public function cetakPeserta()
	{
		$cetakPeserta = DB::table('peserta_rapat')->get();

		return view('Rapat.Peserta.cetakPeserta', compact('cetakPeserta'));
	}

	// method untuk menampilkan view form tambah ruangan
	public function tambah()
	{
		$pegawai = DB::table('pegawai')->get();
		$meeting = DB::table('meeting')->get();
		// memanggil view tambah
		return view('Rapat.Peserta.tambah', ['pegawai' => $pegawai, 'meeting' => $meeting]);
	}

	// method untuk insert data ke table ruangan
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('peserta_rapat')->insert([
			'IDpegawai' => $request->IDpegawai,
			'IDmeating' => $request->IDmeating,
			'ket' => $request->ket
		]);
		// alihkan halaman ke halaman ruangan
		return redirect('/peserta');
	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->get();
		$meeting = DB::table('meeting')->get();
		$peserta = DB::table('peserta_rapat')->where('IDpeserta', $id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('Rapat.Peserta.edit', ['peserta' => $peserta, 'pegawai' => $pegawai, 'meeting' => $meeting]);
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('peserta_rapat')->where('IDpeserta', $request->id)->update([
			'IDpegawai' => $request->IDpegawai,
			'IDmeating' => $request->IDmeating,
			'ket' => $request->ket
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/peserta');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('peserta_rapat')->where('IDpeserta', $id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/peserta');
	}
}
