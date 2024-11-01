<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate PDF</title>
</head>
<body>
        <h1>Daftar Dosen</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>email</th>
                <th>Alamat</th>
                <th>Jabatan</th>
            </tr>
    @foreach($dosens as $dosen)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dosen->nik }}</td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->alamat }}</td>
                <td>{{ $dosen->jabatan }}</td>
            </tr>
@endforeach
    </table>
</body>
</html>


