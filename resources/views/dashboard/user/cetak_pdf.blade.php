<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate PDF</title>
</head>
<body>
    <h1>Daftar User</h1>
    <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>email</th>
            </tr>
    @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
@endforeach
    </table>
</body>
</html>


