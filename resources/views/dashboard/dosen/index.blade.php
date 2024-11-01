@extends('dashboard.layouts.main')
@section('title','Data Dosen')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Daftar Dosen Jurusan TI</h1>
</div>

@if(session('pesan'))
    <div>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('pesan') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
    <a href="/dashboard-dosen/create" class="btn btn-primary mb-3">Create Dosen</a>
    <a href="/cetak-pdf/dosen" target="blank" class="btn btn-success mb-3">Cetak-pdf</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>email</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Aksi</th>
        </tr>
@foreach($dosens as $dosen)
        <tr>
            <td>{{ $dosens->firstItem()+$loop->index }}</td>
            <td>{{ $dosen->nik }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->email }}</td>
            <td>{{ $dosen->alamat }}</td>
            <td>{{ $dosen->jabatan }}</td>
            <td class="text-nowrap">
                <a href="/dashboard-dosen/{{ $dosen->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
                <a href="/dashboard-dosen/{{ $dosen->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                {{-- <a href="" class="btn btn-danger btn-sm">Delete</a> --}}
                <form action="/dashboard-dosen/{{ $dosen->id }}" method="post"
                    class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button title="Hapus Data"  class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
@endforeach
    </table>
    {{  $dosens->links() }}
@endsection

