<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate PDF</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>email</th>
            <th>Alamat</th>
        </tr>
        @foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
            <td>{{ $mahasiswa->tempat_lahir }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
        </tr>
@endforeach
    </table>
</body>
</html>


