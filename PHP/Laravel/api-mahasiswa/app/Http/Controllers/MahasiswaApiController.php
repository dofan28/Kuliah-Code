<?php

namespace App\Http\Controllers;

use App\Models\wali;
use App\Models\dosen;
use App\Models\mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MahasiswaResource;

class MahasiswaApiController extends Controller
{
    public function relasi_1()
    {
        $waliJoin = Wali::with(['Mahasiswa'])->get();


        return response()->json([
            'data'=>$waliJoin
        ]);


        # Tampilkan nama wali mahasiswa
        // $response = [
        //     'nama' => $mahasiswa->nama,
        //     'nama' =>  $mahasiswa->wali->nama,

        // ];
        // return $response;
    }

    public function relasi_2()
    {
        $waliJoin = Mahasiswa::with(['Wali'])->get();


        return response()->json([
            'data'=>$waliJoin
        ]);

    }
}
