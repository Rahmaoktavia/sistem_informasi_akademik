@extends('layouts.main')
@section('title')
{{-- @section('navUser','active') --}}

@section('content')

    <h1>Daftar User Jurusan TI</h1>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>email</th>
        </tr>
@foreach($users as $user)
        <tr>
            <td>{{ $users->firstItem()+$loop->index }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
@endforeach
    </table>
    {{  $users->links() }}
@endsection

