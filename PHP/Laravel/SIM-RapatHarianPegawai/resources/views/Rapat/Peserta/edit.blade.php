@extends('layouts.main')

@section('container')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        @foreach($peserta as $p)
                        <form action="/peserta/update" method="post">
                            @csrf

                            <h1>Edit Data</h1>

                            <input type="hidden" name="id" value="{{ $p->IDpeserta }}"> <br/>

                            <div class="form-group">
                                <label for="IDpegawai">IDpegawai</label><br>
                                <select name="IDpegawai">
                                    @foreach($pegawai as $r)
                                        <option value="{{ $r->IDpegawai }}">{{ $r->IDpegawai }}</option>
                                    @endforeach
                                </select>
                            
                                <!-- error message untuk title -->
                                @error('IDpegawai')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="IDmeating">IDmeeting</label><br>
                                <select name="IDmeating">
                                    @foreach($meeting as $m)
                                        <option value="{{ $m->IDmeating }}">{{ $m->IDmeating }}</option>
                                    @endforeach
                                </select>
                            
                                <!-- error message untuk title -->
                                @error('IDmeating')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="ket">Keterangan</label><br>
                                <textarea rows="4" class="form-control @error('title') is-invalid @enderror" name="ket"> {{ $p->ket }}</textarea>
                            
                                <!-- error message untuk title -->
                                @error('ket')
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