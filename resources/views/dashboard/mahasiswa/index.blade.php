@extends('dashboard.layouts.main')
@section('title','Data Mahasiswa')
@section('navMhs','active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Mahasiswa Jurusan TI</h1>
  </div>

  @if(session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

    <a href="/dashboard-mahasiswa/create" class="btn btn-primary mb-3">Create Mahasiswa</a>
    <a href="/cetak-pdf/mahasiswa" target="blank" class="btn btn-success mb-3">Cetak-pdf</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>email</th>
            <th>Aksi</th>
        </tr>
@foreach($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $mahasiswas->firstItem()+$loop->index }}</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
            <td>{{ $mahasiswa->tempat_lahir }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td class="text-nowrap">
                <a href="/dashboard-mahasiswa/{{ $mahasiswa->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
                <a href="/dashboard-mahasiswa/{{ $mahasiswa->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                {{-- <a href="" class="btn btn-danger btn-sm">Delete</a> --}}
                <form action="/dashboard-mahasiswa/{{ $mahasiswa->id }}" method="post"
                    class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button title="Hapus Data"  class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
@endforeach
    </table>
    {{  $mahasiswas->links() }}
@endsection

