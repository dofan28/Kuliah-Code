@extends('layouts.main')

@section('container')
      
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        @foreach($pegawai as $p)
                        <form action="/pegawai/update" method="post">
                            @csrf

                            <h1>Edit Data</h1>

                            <input type="hidden" name="id" value="{{ $p->IDpegawai }}"> <br/>

                            <div class="form-group">
                                <label for="nama">Nama</label><br>
                                <input type="text" name="nama" class="form-control @error('title') is-invalid @enderror" value="{{ $p->nama }}">
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="noTelp">Nomor Telepon</label><br>
                                <input type="text" name="noTelp" class="form-control @error('title') is-invalid @enderror" value="{{ $p->noTelp }}">
                            
                                <!-- error message untuk title -->
                                @error('noTelp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="jabatan">Jabatan</label><br>
                                <input type="text" name="jabatan" class="form-control @error('title') is-invalid @enderror" value="{{ $p->jabatan }}">
                            
                                <!-- error message untuk title -->
                                @error('jabatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Dept">Departemen</label><br>
                                <input type="text" name="Dept"class="form-control @error('title') is-invalid @enderror" value="{{ $p->Dept }}">
                            
                                <!-- error message untuk title -->
                                @error('Dept')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label><br>
                                <input type="text" name="alamat"class="form-control @error('title') is-invalid @enderror" value="{{ $p->alamat }}">
                            
                                <!-- error message untuk title -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="Simpan Data" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    @endforeach
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