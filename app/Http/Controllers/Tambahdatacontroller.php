<?php

namespace App\Http\Controllers;

use App\Models\tambahdata;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class Tambahdatacontroller extends Controller
{
    public function index(): View
    {
        $tambahdata = tambahdata::all();
        return view('tambahdata.index', [
            "title" => "tambahdata",
            "tambahdata" => $tambahdata
        ]);
    }

    public function create(): View
    {
        return view('tambahdata.create')->with([
            "title" => "Tambah data"
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            "hari" => "required",
            "pekerjaan_yang_dilakukan" => "required",
            "tenaga_kerja" => "required",
            "peralatan_yang_digunakan" => "required",
            "bahan_diterima_ditolak" => "required",
            "cuaca" => "required",
            "masalah_dan_pemecahan" => "required",
            "perintah_yang_diberikan" => "required",
        ]);

        $tambahdata = $request->all();

        
       

        tambahdata::create($tambahdata);

        return redirect()->route('tambahdata.index')->with('success', 'Data Berhasil dimasukan');
    }
    

    public function show(): View
    {
        $tambahdata = tambahdata::all();
        return view('tambahdata.show')->with([
            "title" => "Tampil Data",
            "tambahdata" => $tambahdata
        ]);
    }

}
