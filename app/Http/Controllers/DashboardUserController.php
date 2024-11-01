<?php

namespace App\Http\Controllers;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=\App\Models\User::latest()->paginate(10);
        return view('dashboard.user.index', ['users' => $users]);
    }

    public function cetakPdf()
    {
        $pdf = Pdf::loadView('dashboard.user.cetak_pdf', ['users' => User::all()]);
        return $pdf->stream('Laporan-Data-User.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('dashboard.user.create', ['users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:3', 'confirmed'],
        ]);
        User::create($validated);
        return redirect('dashboard-user')->with('pesan', 'Data Berhasil Di-tambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::find($id);
        return view ('dashboard.user.edit', compact('users'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => ['string', 'email'],
        ]);
        User::where('id', $id)->update($validated);
        return redirect('dashboard-user')->with('pesan', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('dashboard-user')->with('pesan', 'Data berhasil dihapus');
    }
}
