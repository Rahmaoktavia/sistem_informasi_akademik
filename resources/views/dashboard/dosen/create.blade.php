@extends('dashboard.layouts.main')

@section('content')
<h1></h1>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Input Data Dosen</h1>
</div>
<div class="row">
    <div class="col-6">
        <form action="/dashboard-dosen" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIK</label>
                <input type="text" class="form-control @error('nik') is-invalid @enderror"
                    name="nik" id="nik" value="{{ old('nik') }}" placeholder="NIK">
                @error('nik')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                    name="nama" id="nama" value="{{ old('nama') }}" placeholder="Nama Lengkap">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" id="email" value="{{ old('email') }}" placeholder="name@example.com">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                    name="no_telp" id="no_telp" value="{{ old('no_telp') }}" placeholder="No Telepon">
                @error('no_telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <select class="form-select @error('prodi_id') is-invalid @enderror" name="prodi_id" id="prodi">
                    <option value="">--Pilih Prodi--</option>
                    @foreach($prodis as $prodi)
                    <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                    @endforeach
                </select>
                @error('prodi_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror"
                    name="alamat" id="alamat" placeholder="Masukkan Alamat">{{ old('alamat') }}</textarea>
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jabatan" class="form-label">Jabatan</label>
                <select class="form-select @error('jabatan') is-invalid @enderror" name="jabatan" id="jabatan">
                    <option value="">--Pilih Jabatan--</option>
                    <option value="Asisten Ahli" {{ old('jabatan') == 'Asisten Ahli' ? 'selected' : '' }}>Asisten Ahli</option>
                    <option value="Lektor" {{ old('jabatan') == 'Lektor' ? 'selected' : '' }}>Lektor</option>
                    <option value="Lektor Kepala" {{ old('jabatan') == 'Lektor Kepala' ? 'selected' : '' }}>Lektor Kepala</option>
                    <option value="Guru Besar" {{ old('jabatan') == 'Guru Besar' ? 'selected' : '' }}>Guru Besar</option>
                </select>
                @error('jabatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
