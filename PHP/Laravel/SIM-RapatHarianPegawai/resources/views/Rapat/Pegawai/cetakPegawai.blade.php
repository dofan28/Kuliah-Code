<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table.static{
            position: relative;
            border: 1px solid #543535
        }
    </style>
    <title>Cetak Data Pegawai</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Pegawai</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>ID Pegawai</th>
                <th>Nama</th>
                <th>Nomor Telepon</th>
                <th>Jabatan</th>
                <th>Departemen</th>
                <th>Alamat</th>
            </tr>
            
            @foreach ( $cetakPegawai as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->noTelp }}</td>
            <td>{{ $item->jabatan }}</td>
            <td>{{ $item->Dept }}</td>
            <td>{{ $item->alamat }}</td>
        </tr>
        @endforeach
        </table>
    </div>

    <script>
		window.print();
	</script>
</body>
</html>