<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Perabot</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h2 { text-align: center; margin-bottom: 20px; }
        table { width:100%; border-collapse: collapse; }
        th, td { border:1px solid #000; padding:8px; text-align:left; }
        th { background:#f2f2f2; }
    </style>
</head>
<body>
    <h2>Laporan Data Perabot Rumah Tangga</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Bahan</th>
                <th>Ukuran</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($perabots as $p)
            <tr>
                <td>{{ $p->id_perabot }}</td>
                <td>{{ $p->nama_perabot }}</td>
                <td>{{ $p->bahan }}</td>
                <td>{{ $p->ukuran }}</td>
                <td>Rp{{ number_format($p->harga,0,',','.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
