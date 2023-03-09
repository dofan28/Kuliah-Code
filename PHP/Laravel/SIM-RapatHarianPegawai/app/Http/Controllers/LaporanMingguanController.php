<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporanmingguan;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\RedirectController;
use App\Http\Controllers\HomeController;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Session;

class LaporanMingguanController extends Controller
{
    public function index()
    {
        $data = laporanmingguan::all();
        return view('laporan.laporanMingguan', compact('data'));
    }

    public function simpan(Request $request)
    {
        // $data = new laporanharian();
        // $data->hari = $request->hari;
        // $data->jumlah_meeting = $request->jumlah_meeting;

        // $data->save();
        // return Redirect('/laporanharian');

        DB::table('laporanmingguan')->insert([
            'minggu' => $request->minggu,
            'jumlah_meeting' => $request->jumlah_meeting
        ]);

        Session::flash('sukses', 'Data Berhasil disimpan!');
        return redirect('/laporanmingguan');
    }

    public function edit(Request $request, $id)
    {
        $data = laporanmingguan::where('no', $id)->first();
        return view('laporan.editLaporanmingguan', compact('data'));
    }


    public function update(Request $request, $id)
    {
        // update data pegawai
        DB::table('laporanmingguan')->where('no', $request->id)->update([
            'minggu' => $request->minggu,
            'jumlah_meeting' => $request->jumlah_meeting
        ]);
        Session::flash('sukses', 'Data berhasil di update');
        return redirect('/laporanmingguan');
    }

    public function hapus(Request $request, $id)
    {
        DB::table('laporanmingguan')->where('no', $id)->delete();
        Session::flash('sukses', 'Data berhasil di hapus');
        return Redirect('/laporanmingguan');
    }
}
