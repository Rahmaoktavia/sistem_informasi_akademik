@extends('layouts.main')
@section('title','Data Prodi')
@section('navMhs','active')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Prodi</h1>
</div>

<table class="table table-bordered">
    <tr>
        <th style="width: 3%;">No</th>
        <th>Nama</th>

    </tr>
    @foreach($prodis as $prodi)
    <tr>
        <td>{{ $prodis->firstItem() + $loop->index }}</td>
        <td>{{ $prodi->nama }}</td>
    </tr>
    @endforeach
</table>
{{ $prodis->links() }}
@endsection
