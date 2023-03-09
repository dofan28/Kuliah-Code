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
    <title>Cetak Data Ruangan</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Ruangan</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>ID Ruangan</th>
                <th>Nama Ruangan</th>
                <th>Lantai</th>
            </tr>
            
            @foreach ( $cetakRuangan as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_ruang }}</td>
            <td>{{ $item->lantai }}</td>
        </tr>
        @endforeach
        </table>
    </div>

    <script>
		window.print();
	</script>
</body>
</html>