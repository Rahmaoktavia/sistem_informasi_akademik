<?php

namespace App\Http\Controllers;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class DashboardMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswas=\App\Models\Mahasiswa::latest()->paginate(10);
        return view('dashboard.mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    public function cetakPdf()
    {
        $pdf = Pdf::loadView('dashboard.mahasiswa.cetak_pdf', ['mahasiswas' => Mahasiswa::all()]);
        return $pdf->stream('Laporan-Data-Mahasiswa.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.mahasiswa.create',['prodis' =>Prodi::all()]);

        //atau
        // $prodis = Prodi::all();
        // return view('dashboard.mahasiswa.create',['prodis' =>$prodis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           'nim' => 'required|unique:mahasiswas',
           'nama_lengkap' => 'required|min:3',
           'tempat_lahir' => 'required',
           'tgl_lahir' => 'required',
           'email' => 'required',
           'prodi_id' => 'required',
           'alamat' => 'nullable',
        ]);

        //dd($validated);

        Mahasiswa::create($validated);
        return redirect('/dashboard-mahasiswa')->with('pesan','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('dashboard.mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodis = Prodi::all();
        $mahasiswa = Mahasiswa::find($id);
        return view('dashboard.mahasiswa.edit', compact('prodis','mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nim' => 'required|max:10',
            'nama_lengkap' => 'required|min:3',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'email' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'nullable',
         ]);

         Mahasiswa::where('id', $id)->update($validated);
         return redirect('dashboard-mahasiswa')->with('pesan','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Mahasiswa::destroy($id);
        return redirect('dashboard-mahasiswa')->with('pesan','Data Berhasil Dihapus');
    }


}
