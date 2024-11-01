@extends('layouts.main')

@section('content')

        <h1>Nilai Mahasiswa</h1>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>total Nilai</th>
            </tr>
            <tr>
                <td>{{ $nama }}</td>
                <td>{{ $nim }}</td>
                <td>{{ $total_nilai }}</td>
            </tr>
        </table>
    </div>

    {{-- Menggunakan If Else

        <h2>Nilai Mahasiswa</h2>
        <div class="col-md-6">
            @if (($total_nilai>=0) and ($total_nilai<56))
                <div class="alert alert-danger"> Maaf, anda tidak lulus</div>
            @elseif(($total_nilai>55) and ($total_nilai<=100))
                <div class="alert alert-succes"> Selamat, Anda Lulus</div>

            @endif
            <table class="table table-bordered table-striped">
                <tr class="text-md-center">
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>total Nilai</th>
                </tr>
                <tr>
                    <td>{{ $nama }}</td>
                    <td>{{ $nim }}</td>
                    <td>{{ $total_nilai }}</td>
                </tr>
            </table>
        </div>
    </div>

    {{-- Menggunakan If Else --}}

        {{-- <h2>Nilai Mahasiswa</h2>
        <div class="col-md-6">
            @switch($total_nilai)
            @case(0)
            <div class="alert alert-danger"> Sangat Jelek</div>
                @break
            @case(70)
            <div class="alert alert-primary">Memuaskan</div>
                @break
            @case(100)
            <div class="alert alert-success">Sangat Memuaskan</div>
                @break
            @default
            <div class="alert alert-warning">Nilai tidak valid!</div>

        @endswitch

            <table class="table table-bordered table-striped">
                <tr class="text-md-center">
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>total Nilai</th>
                </tr>
                <tr>
                    <td>{{ $nama }}</td>
                    <td>{{ $nim }}</td>
                    <td>{{ $total_nilai }}</td>
                </tr>
            </table>
        </div> --}}
    </div>
@endsection
