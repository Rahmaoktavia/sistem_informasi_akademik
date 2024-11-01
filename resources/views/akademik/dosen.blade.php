@extends('layouts.main')
@section('title')
@section('navDosen','active')

@section('content')

    <h1>Daftar Dosen Jurusan TI</h1>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>email</th>
            <th>Alamat</th>
        </tr>
@foreach($dosens as $dosen)
        <tr>
            <td>{{ $dosens->firstItem()+$loop->index }}</td>
            <td>{{ $dosen->nik }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->email }}</td>
            <td>{{ $dosen->alamat }}</td>
        </tr>
@endforeach
    </table>
    {{  $dosens->links() }}
@endsection

