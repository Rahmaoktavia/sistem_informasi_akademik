@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Matakuliah</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="m-0">Detail Matakuliah</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th style="width: 30%;" scope="row">Kode Matakuliah</th>
                                    <td>{{ $matakuliah->kode_mk }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Matakuliah</th>
                                    <td>{{ $matakuliah->nama_mk }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">SKS</th>
                                    <td>{{ $matakuliah->sks }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Semester</th>
                                    <td>{{ $matakuliah->semester }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/dashboard-matakuliah" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
