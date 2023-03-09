<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporanbulanan;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\RedirectController;
use App\Http\Controllers\HomeController;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Session;

class LaporanBulananController extends Controller
{
    public function index()
    {
        $data = laporanbulanan::all();
        return view('laporan.laporanBulanan', compact('data'));
    }

    public function simpan(Request $request)
    {
        // $data = new laporanharian();
        // $data->hari = $request->hari;
        // $data->jumlah_meeting = $request->jumlah_meeting;

        // $data->save();
        // return Redirect('/laporanharian');

        DB::table('laporanbulanan')->insert([
            'bulan' => $request->bulan,
            'jumlah_meeting' => $request->jumlah_meeting
        ]);

        Session::flash('sukses', 'Data Berhasil disimpan!');
        return redirect('/laporanbulanan');
    }

    public function edit(Request $request, $id)
    {
        $data = laporanbulanan::where('no', $id)->first();
        return view('laporan.editLaporanbulanan', compact('data'));
    }


    public function update(Request $request, $id)
    {
        // update data pegawai
        DB::table('laporanbulanan')->where('no', $request->id)->update([
            'bulan' => $request->bulan,
            'jumlah_meeting' => $request->jumlah_meeting
        ]);
        Session::flash('sukses', 'Data berhasil di update');
        return redirect('/laporanbulanan');
    }

    public function hapus(Request $request, $id)
    {
        DB::table('laporanbulanan')->where('no', $id)->delete();
        Session::flash('sukses', 'Data berhasil di hapus');
        return Redirect('/laporanbulanan');
    }
}
