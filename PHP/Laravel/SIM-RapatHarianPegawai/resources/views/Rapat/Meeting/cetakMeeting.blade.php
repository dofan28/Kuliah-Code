<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535
        }
    </style>
    <title>Cetak Data Meeting</title>
</head>

<body>
    <div class="form-group">
        <p align="center"><b>Laporan Data Meeting</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>ID Meeting</th>
                <th>ID Ruang</th>
                <th>Judul Meeting</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Waktu Mulai</th>
                <th>Waktu Berakhir</th>
            </tr>

            @foreach ($cetakMeeting as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->judulM }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td>{{ $item->tgl }}</td>
                    <td>{{ $item->waktu_mulai }}</td>
                    <td>{{ $item->waktu_berakhir }}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>
