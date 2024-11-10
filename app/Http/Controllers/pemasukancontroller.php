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
            "lokasi" => "required",
            "foto" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048", // Image validation
        ]);

        $pemasukan = $request->all();

        // Handle the image file upload
        if ($request->hasFile('foto')) {
            $pemasukan['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        pemasukan::create($pemasukan);

        return redirect()->route('pemasukan.index')->with('success', 'laporan Berhasil dimasukan');
    }

    public function edit(pemasukan $pemasukan): View
    {
        return view('pemasukan.edit', compact('pemasukan'))->with([
            "title" => "ubah pemasukan",
            "pemasukan" => pemasukan::all()
        ]);
    }

    public function update(pemasukan $pemasukan, Request $request): RedirectResponse
    {
        $request->validate([
            "pekerjaan" => "required",
            "pelaksanaan" => "required",
            "lokasi" => "required",
            "foto" => "image|mimes:jpeg,png,jpg,gif,svg|max:2048", // Image validation
        ]);

        $pemasukan = $request->all();

        // Handle the image file upload
        if ($request->hasFile('foto')) {
            // Delete the old image if it exists
            if ($pemasukan->foto) {
                Storage::disk('public')->delete($pemasukan->foto);
            }
            $pemasukan['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        $pemasukan->update($pemasukan);

        return redirect()->route('pemasukan.index')->with('updated', 'laporan Berhasil Diubah');
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
        if ($pemasukan->foto) {
            Storage::disk('public')->delete($pemasukan->foto);
        }

        $pemasukan = Pemasukan::findOrFail($id);
    $pemasukan->delete();

    return redirect()->route('pemasukan.index')->with('deleted', 'Data berhasil dihapus!');

    }
}
