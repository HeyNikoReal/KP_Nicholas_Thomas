<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatans = DB::select('select * from jabatans');
        return view("jabatan.index", ["jabatans" => $jabatans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatans = DB::select('select * from jabatans');
        return view("jabatan.create", ["jabatans" => $jabatans]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "kode_jabatan" => "required",
            "nama_jabatan" => "required",
        ]);
        Jabatan::create($validasi);
        return redirect("jabatan")->with("success", "Jabatan $request->nama_jabatan berhasil ditambah.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jabatan = Jabatan::find($id);
        return view("jabatan.edit")->with("jabatan", $jabatan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            "kode_jabatan" => "required",
            "nama_jabatan" => "required",
        ]);

        $jabatanSebelum = Jabatan::find($id);
        $namaJabatanSebelum = $jabatanSebelum->nama_jabatan;

        Jabatan::find($id)->update($validasi);
        return redirect("jabatan")->with("success", "Jabatan $namaJabatanSebelum berhasil diperbarui.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();
        return redirect()->route('jabatan.index')->with('success', 'Jabatan ' . $jabatan->nama_jabatan . ' berhasil dihapus.');
    }
}
