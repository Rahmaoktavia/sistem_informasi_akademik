<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate PDF</title>
</head>
<body>
    <h1>Daftar Matakuliah</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode Matakuliah</th>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Semester</th>
        </tr>
        @foreach($matakuliahs as $matakuliah)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $matakuliah->kode_mk }}</td>
            <td>{{ $matakuliah->nama_mk }}</td>
            <td>{{ $matakuliah->sks }}</td>
            <td>{{ $matakuliah->semester }}</td>
        </tr>
@endforeach
    </table>
</body>
</html>


