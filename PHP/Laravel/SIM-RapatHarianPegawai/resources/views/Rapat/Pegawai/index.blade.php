<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray"> -->
@extends('layouts.main')

@section('container')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="pegawai/tambah" class="btn btn-md btn-success mb-3">Tambah Post</a>
                        <a href="/cetakpegawai" target="_blank" class="btn btn-md btn-primary mb-3">Cetak Data Pegawai</a>

                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>IDpegawai</th>
                                <th>Nama</th>
                                <th>Nomor Telepon</th>
                                <th>Jabatan</th>
                                <th>Departemen</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                              </tr>
                            </thead>
                            <tbody>
								@foreach($pegawai as $p)
								<tr>
									<td>{{ $p->IDpegawai }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->noTelp }}</td>
                                    <td>{{ $p->jabatan }}</td>
                                    <td>{{ $p->Dept }}</td>
                                    <td>{{ $p->alamat }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST">
                                            <a href="/pegawai/edit/{{ $p->IDpegawai }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            <a href="/pegawai/hapus/{{ $p->IDpegawai }}" class="btn btn-sm btn-danger">Hapus</a>
                                        </form>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

<!-- </body>
</html> -->
@endsection