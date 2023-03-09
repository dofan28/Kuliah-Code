<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporanharian;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\RedirectController;
use App\Http\Controllers\HomeController;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Session;

class LaporanHarianController extends Controller
{
    public function index()
    {
        $data = laporanharian::all();
        return view('laporan.laporanHarian', compact('data'));
    }

    public function simpan(Request $request)
    {
        // $data = new laporanharian();
        // $data->hari = $request->hari;
        // $data->jumlah_meeting = $request->jumlah_meeting;

        // $data->save();
        // return Redirect('/laporanharian');

        DB::table('laporanharian')->insert([
            'hari' => $request->hari,
            'jumlah_meeting' => $request->jumlah_meeting
        ]);

        Session::flash('sukses', 'Data Berhasil disimpan!');
        return redirect('/laporanharian');
    }

    public function edit(Request $request, $id)
    {
        $data = laporanharian::where('no', $id)->first();
        return view('laporan.editLaporanharian', compact('data'));
    }


    public function update(Request $request, $id)
    {
        // update data pegawai
        DB::table('laporanharian')->where('no', $request->id)->update([
            'hari' => $request->hari,
            'jumlah_meeting' => $request->jumlah_meeting
        ]);
        Session::flash('sukses', 'Data berhasil di update');
        return redirect('/laporanharian');
    }

    public function hapus(Request $request, $id)
    {
        DB::table('laporanharian')->where('no', $id)->delete();
        Session::flash('sukses','Data berhasil di hapus');
        return Redirect('/laporanharian');
    }
}
