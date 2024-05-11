<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawans = DB::select('select users.id, kode_karyawan, nama_karyawan, nama_jabatan, alamat,nomor_telepon from users join jabatans on jabatans.kode_jabatan = users.kode_jabatan');
        return view("karyawan.index", ["karyawans" => $karyawans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $karyawans = DB::select('select * from jabatans');
    //     return view("karyawan.create", ["karyawans" => $karyawans]);
    // }
    public function create()
    {
        $users = DB::select('select * from jabatans');
        return view("karyawan.create", ["users" => $users]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required|min:8",
            "kode_karyawan" => "required",
            "nama_karyawan" => "required",
            "kode_jabatan" => "required",
            "jenis_kelamin" => "required",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required",
            "alamat" => "required",
            "agama" => "required",
            "nomor_telepon" => "required",
        ]);

        $karyawan =  new User([
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "kode_karyawan" =>  $request->kode_karyawan,
            "nama_karyawan" =>  $request->nama_karyawan,
            "kode_jabatan" =>  $request->kode_jabatan,
            "jenis_kelamin" =>  $request->jenis_kelamin,
            "tempat_lahir" =>  $request->tempat_lahir,
            "tanggal_lahir" =>  $request->tanggal_lahir,
            "alamat" =>  $request->alamat,
            "agama" =>  $request->agama,
            "nomor_telepon" =>  $request->nomor_telepon,
        ]);
        $karyawan->save();
        return redirect("karyawan")->with("success", "Biodata " . $request->nama_karyawan . " berhasil ditambah.");
    }

    public function edit($id)
    {
        $karyawan = User::find($id);
        $jabatanOptions = Jabatan::pluck('nama_jabatan', 'kode_jabatan');  
        return view("karyawan.edit", compact('karyawan', 'jabatanOptions'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            "email" => "required",
            "password" => "required|min:8",
            "kode_karyawan" => "required",
            "nama_karyawan" => "required",
            "kode_jabatan" => "required",
            "jenis_kelamin" => "required",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required",
            "alamat" => "required",
            "agama" => "required",
            "nomor_telepon" => "required",
        ]);
        User::find($id)->update($validasi);
        return redirect("karyawan")->with("success", "Biodata " . $request->nama_karyawan . " berhasil diperbarui.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('success', 'Biodata ' . $karyawan->nama_karyawan . ' berhasil dihapus.');
    }
}
