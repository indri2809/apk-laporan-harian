<?php

namespace App\Http\Controllers;

use App\Models\pemasukan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class pemasukancontroller extends Controller
{
    public function index(): View
    {
        $pemasukan = pemasukan::all();
        return view('pemasukan.index', [
            "title" => "pemasukan",
            "pemasukan" => $pemasukan
        ]);
    }

    public function create(): View
    {
        return view('pemasukan.create')->with([
            "title" => "Tambah laporan"
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "pekerjaan" => "required",
            "pelaksanaan" => "required",
            "lokasi" => "required"
        ]);

        $pemasukan = $request->all();

        // Handle the image file upload
       

        pemasukan::create($pemasukan);

        return redirect()->route('pemasukan.index')->with('success', 'laporan Berhasil dimasukan');
    }

    public function edit(pemasukan $pemasukan): View
    {
        return view('pemasukan.edit', [
            "title" => "Ubah pemasukan",
            "pemasukan" => $pemasukan
        ]);
    }
    

    public function update(Request $request, pemasukan $pemasukan): RedirectResponse
    {
        $request->validate([
            "pekerjaan" => "required",
            "pelaksanaan" => "required",
            "lokasi" => "required",
        ]);
    
        $data = $request->all();
    
        $pemasukan->update($data);
    
        return redirect()->route('pemasukan.index')->with('updated', 'Laporan berhasil diubah');
    }
    

    public function show(): View
    {
        $pemasukan = pemasukan::all();
        return view('pemasukan.show')->with([
            "title" => "Tampil Data",
            "pemasukan" => $pemasukan
        ]);
    }

    public function destroy($id): RedirectResponse
    {
        $pemasukan = pemasukan::findOrFail($id);

        // Delete the image if it exists
       
        $pemasukan = Pemasukan::findOrFail($id);
    $pemasukan->delete();

    return redirect()->route('pemasukan.index')->with('deleted', 'Data berhasil dihapus!');

    }
}
