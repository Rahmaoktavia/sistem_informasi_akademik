@extends('dashboard.layouts.main')
@section('title','Data Mahasiswa')
@section('navMhs','active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar User</h1>
  </div>

  @if(session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

    <a href="/dashboard-user/create" class="btn btn-primary mb-3">Create User</a>
    <a href="/cetak-pdf/user" target="blank" class="btn btn-success mb-3">Cetak-pdf</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>email</th>
            <th>Aksi</th>
        </tr>
@foreach($users as $user)
        <tr>
            <td>{{ $users->firstItem()+$loop->index }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-nowrap">
                <a href="/dashboard-user/{{ $user->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
                <a href="/dashboard-user/{{ $user->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
                {{-- <a href="" class="btn btn-danger btn-sm">Delete</a> --}}
                <form action="/dashboard-user/{{ $user->id }}" method="post"
                    class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button title="Hapus Data"  class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
@endforeach
    </table>
    {{  $users->links() }}
@endsection

