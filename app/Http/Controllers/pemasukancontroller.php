<?php

namespace App\Http\Controllers;

use App\Models\pemasukan;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class pemasukancontroller extends Controller
{
    //
    public function index()
        {
            $pemasukan=pemasukan::all();
            return view('pemasukan.index',[
                "title"=>"pemasukan",
                "data"=>$pemasukan
            ]);
        }
    public function create():View
    {
        return view('pemasukan.create')->with([
            "title" => "Tambah laporan"
        ]);
    }
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            "pekerjaan"=>"required",
            "pelaksanaan"=>"required",
            "lokasi"=>"required",
        ]);
        pemasukan::create($request->all());

    return redirect()->route('pemasukan.index')->with('success', 'laporan Berhasil dimasukan');
    }
    public function edit(pemasukan $pemasukan):View
    {
        return view('pemasukan.edit',compact('pemasukan'))->with([
            "title" => "ubah pemasukan",
            "data" => pemasukan::all()
        ]);
    }
    public function update(pemasukan $pemasukan, Request $request):RedirectResponse
    {
        $request->validate([
            "pekerjaan"=>"required",
            "pelaksanaan"=>"required",
            "lokasi"=>"required",
        ]);
        $pemasukan->update($request->all());
        return redirect()->route('pemasukan.index')->with('updated','laporan Berhasil Diubah');
    }
    public function show():View
    {
        $pemasukan=pemasukan::all();
        return view('pemasukan.show')->with([
            "title" => "Tampil Data ",
            "data" =>$pemasukan
        ]);
    }
    public function destroy($id):RedirectResponse
    {
        pemasukan::where('id',$id)->delete();
        return redirect()->route('pemasukan.index')->with('delete','laporan Berhasil Dihapus');
}
}