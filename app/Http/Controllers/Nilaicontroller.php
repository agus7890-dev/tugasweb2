<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\nilai;
use Illuminate\Http\Request;

class Nilaicontroller extends Controller
{
    public function index()
    {
        $nilai = nilai::with(['user'])->get(); // select * from nama_table
        return view('nilai.index', compact('nilai')); 
    }

    public function create()
    {
        $user = Nilai::all();
        return view('mahasiswa.create', compact('user'));
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil di Simpan.');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        $nilai = Nilai::find($id); //select * from nam_table where id =$id;
        return view('nilai.edit', compact('nilai'));
    }
    
    public function update(Request $request, $id)
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        toast('Yeay Berhasil Mengedit Data','success');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('nilai');
    }
}
