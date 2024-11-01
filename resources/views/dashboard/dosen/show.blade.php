@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Dosen</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="m-0">Detail Dosen</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th style="width: 30%;" scope="row">NIK</th>
                                    <td>{{ $dosen->nik }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Lengkap</th>
                                    <td>{{ $dosen->nama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{ $dosen->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No Telepon</th>
                                    <td>{{ $dosen->no_telp }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Prodi</th>
                                    <td>{{ $dosen->prodi->nama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>{{ $dosen->alamat }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jabatan</th>
                                    <td>{{ $dosen->jabatan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/dashboard-dosen" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
