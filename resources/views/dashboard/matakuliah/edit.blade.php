@extends('dashboard.layouts.main')

@section('content')
<h1></h1>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Matakuliah</h1>
</div>
<div class="row">
  <div class="col-6">
  <form action="/dashboard-matakuliah/{{ $matakuliahs->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="kode_mk" class="form-label">Kode Matakuliah</label>
        <input type="text" class="form-control @error('kode_mk') is-invalid @enderror"
        name="kode_mk" id="kode_mk" value="{{ old('kode_mk', $matakuliahs->kode_mk) }}" placeholder="Kode Matakuliah" readonly>
        @error('kode_mk')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="nama_mk" class="form-label">Nama Matakuliah</label>
        <input type="text" class="form-control @error('nama_mk') is-invalid @enderror"
        name="nama_mk" id="nama_mk" value="{{ old('nama_mk', $matakuliahs->nama_mk) }}" placeholder="Nama Matakuliah">
        @error('nama_mk')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sks" class="form-label">SKS</label>
        <input type="number" class="form-control @error('sks') is-invalid @enderror"
        name="sks" id="sks" value="{{ old('sks', $matakuliahs->sks) }}" placeholder="SKS">
        @error('sks')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="semester" class="form-label">Semester</label>
        <input type="number" class="form-control @error('semester') is-invalid @enderror"
        name="semester" id="semester" value="{{ old('semester', $matakuliahs->semester) }}" placeholder="Semester">
        @error('semester')
            <div class=invalid-feedback>
                {{ $message }}
            </div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
@endsection
