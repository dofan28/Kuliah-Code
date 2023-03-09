@extends('layouts.main')
@extends('laporan.alert')
@section('container')
    <div class="container">
        <div class="row-justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">Laporan Meeting Mingguan</div>
                    <div class="card-boy">
                        <h5>Edit Data Baru</h5>
                        <hr>
                        <form method="POST" action="{{ url('updatelaporanmingguan/' . $data->no) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group row">
                                        <label for="minggu" class="col-md-4 col-form-label text-md-right">Minggu Ke-*</label>

                                        <div class="col-md-8">
                                            <input id="minggu" type="text"
                                                class="form-control @error('minggu') is-invalid @enderror" name="minggu"
                                                value="{{ $data->minggu }}" required autofocus>

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
                                                name="jumlah_meeting" value="{{ $data->jumlah_meeting }}" required>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
