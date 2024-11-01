@extends('dashboard.layouts.main')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detail Mahasiswa</h1>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="m-0">Detail Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th style="width: 30%;" scope="row">NIM</th>
                                    <td>{{ $mahasiswa->nim }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Lengkap</th>
                                    <td>{{ $mahasiswa->nama_lengkap }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tempat Lahir</th>
                                    <td>{{ $mahasiswa->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="bg-light">Tanggal Lahir</th>
                                    <td>{{ \Carbon\Carbon::parse($mahasiswa->tgl_lahir)->translatedFormat('d F Y') }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{ $mahasiswa->email }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Prodi</th>
                                    <td>{{ $mahasiswa->prodi->nama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>{{ $mahasiswa->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/dashboard-mahasiswa" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
