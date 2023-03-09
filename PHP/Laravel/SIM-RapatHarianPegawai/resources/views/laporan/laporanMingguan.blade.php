@extends('layouts.main')
@extends('laporan.alert')
@section('container')
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">Tabel Laporan Meeting Perminggu</div>
                    <div class="card-boy">
                        <h5>Tambahkan Data Baru</h5>
                        <hr>
                        <form method="POST" action="/simpanlaporanmingguan">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="minggu" class="col-md-4 col-form-label text-md-right">Minggu Ke-*</label>

                                        <div class="col-md-8">
                                            <input id="minggu" type="text"
                                                class="form-control @error('minggu') is-invalid @enderror" name="minggu"
                                                value="{{ old('minggu') }}" required autofocus>

                                            @error('minggu')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="jumlah_meeting" class="col-md-4 col-form-label text-md-right">Jumlah
                                            Meeting*</label>

                                        <div class="col-md-8">
                                            <input id="jumlah_meeting" type="number"
                                                class="form-control @error('jumlah_meeting') is-invalid @enderror"
                                                name="jumlah_meeting" value="{{ old('jumlah_meeting') }}" required>

                                            @error('jumlah_meeting')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-4 col-form-label text-md-right"></label>

                                        <div class="col-md-8">
                                            <button class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-responsive table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Minggu Ke-</th>
                                        <th class="text-center">Jumlah Meeting</th>
                                        <th class="text-center">Aksi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $no => $value)
                                        <tr>
                                            <td align="center">{{ $value->no }}</td>
                                            <td align="center">{{ $value->minggu }}</td>
                                            <td align="center">{{ $value->jumlah_meeting }}</td>
                                            <td align="center">
                                                <a href="{{ url($value->no . '/editlaporanmingguan') }}"><button
                                                        class="btn btn-primary">Ubah</button></a>

                                                <a href="{{ url($value->no . '/hapusdatalaporanmingguan') }}"><button
                                                        class="btn btn-danger">Hapus</button></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
