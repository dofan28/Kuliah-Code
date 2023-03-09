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
    <title>Cetak Data Peserta</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Peserta</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>ID Peserta</th>
                <th>ID Pegawai</th>
                <th>ID Meeting</th>
                <th>Keterangan</th>
            </tr>

            @foreach ( $cetakPeserta as $item)
        <tr>
            <td>{{ $item->IDpeserta }}</td>
            <td>{{ $item->IDpegawai }}</td>
            <td>{{ $item->IDmeating }}</td>
            <td>{{ $item->ket }}</td>
        </tr>
        @endforeach
        </table>
    </div>

    <script>
		window.print();
	</script>
</body>
</html>
