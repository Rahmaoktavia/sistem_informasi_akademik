<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Prodi;

class DashboardProdiController extends Controller
{
    public function index()
    {
        $prodi = Prodi::paginate(10);
        return view('dashboard.prodi.index',['prodis' => $prodi]);
    }

    public function cetakPdf()
    {
        $pdf = Pdf::loadView('dashboard.prodi.cetak_pdf', ['prodis' => Prodi::all()]);
        return $pdf->stream('Laporan-Data-Prodi.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.prodi.create',['prodis' =>Prodi::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:3',

         ]);

         //dd($validated);

         Prodi::create($validated);
         return redirect('/dashboard-prodi')->with('pesan', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        return view('dashboard.prodi.edit', compact('prodi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //     $validated = $request->validate([
    //         'nama' => 'required|max:255',
    //      ]);

    //     //  Prodi::where('id', $id)->update($validated);
    //     $prodi = Prodi::findOrFail($id);
    //     $prodi->update($request->all());
    //     // return redirect('dashboard-prodi')->with('pesan', 'Data berhasil diubah');
    //     return redirect('/dashboard-prodi')->with('pesan', 'Data berhasil diubah');
        $validated = $request->validate([
            'nama' => 'required|min:3',
        ]);

        Prodi::where('id', $id)->update($validated);
        return redirect('dashboard-prodi')->with('pesan','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Prodi::destroy($id);
        return redirect('dashboard-prodi')->with('pesan', 'Data berhasil dihapus');
    }
}
