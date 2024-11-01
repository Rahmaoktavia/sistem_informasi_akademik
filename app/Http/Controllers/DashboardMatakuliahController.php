<?php

namespace App\Http\Controllers;
use App\Models\MataKuliah;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DashboardMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matakuliahs=\App\Models\MataKuliah::latest()->paginate(10);
        return view('dashboard.matakuliah.index', ['matakuliahs' => $matakuliahs]);
    }

    public function cetakPdf()
    {
        $pdf = Pdf::loadView('dashboard.matakuliah.cetak_pdf', ['matakuliahs' => Matakuliah::all()]);
        return $pdf->stream('Laporan-Data-Matakuliah.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.matakuliah.create',['matakuliah' =>Matakuliah::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|unique:matakuliahs',
            'nama_mk' => 'required|min:3',
            'sks' => 'required',
            'semester' => 'required',
         ]);

         //dd($validated);

         Matakuliah::create($validated);
         return redirect('/dashboard-matakuliah')->with('pesan','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $matakuliah = Matakuliah::findOrFail($id);
        return view('dashboard.matakuliah.show', compact('matakuliah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $matakuliahs = Matakuliah::findOrFail($id);
        return view('dashboard.matakuliah.edit', compact('matakuliahs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_mk' => 'required|unique:matakuliahs,kode_mk,'.$id,
            'nama_mk' => 'required|min:3',
            'sks' => 'required',
            'semester' => 'required',
         ]);

         $matakuliah = Matakuliah::findOrFail($id);
         $matakuliah->update($validated);

         return redirect('dashboard-matakuliah')->with('pesan','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Matakuliah::destroy($id);
        return redirect('dashboard-matakuliah')->with('pesan','Data Berhasil Dihapus');
    }
}
