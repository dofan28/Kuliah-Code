@extends('layouts.main')

@section('container')
      
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="/meeting/store" method="post">
                            @csrf

                            <h1>Input Data</h1>
                            
                            <div class="form-group">
                                <label for="IDruang">Ruangan</label><br>
                                <select name="IDruang">
                                    @foreach($ruangan as $r)
                                        <option value="{{ $r->IDruang }}">{{ $r->nama_ruang }}</option>
                                    @endforeach
                                </select>
                                
                                <!-- error message untuk title -->
                                @error('IDruang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="judul">Judul</label><br>
                                <input type="text" name="judulM" class="form-control @error('title') is-invalid @enderror"  placeholder="Masukkan Judul">
                            
                                <!-- error message untuk title -->
                                @error('judul')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Keterangan</label><br>
                                <textarea rows="4" class="form-control @error('title') is-invalid @enderror" name="keterangan"  placeholder="Masukkan Keterangan"></textarea>

                                <!-- error message untuk title -->
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tgl">Tanggal</label><br>
                                <input type="date" name="tgl" class="form-control @error('title') is-invalid @enderror">
                            
                                <!-- error message untuk title -->
                                @error('tgl')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="waktu_mulai">Waktu Mulai</label><br>
                                <input type="time" name="waktu_mulai" class="form-control @error('title') is-invalid @enderror">
                            
                                <!-- error message untuk title -->
                                @error('waktu_mulai')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="waktu_berakhir">Waktu Berakhir</label><br>
                                <input type="time" name="waktu_berakhir" class="form-control @error('title') is-invalid @enderror">
                            
                                <!-- error message untuk title -->
                                @error('waktu_berakhir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="Simpan Data" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection