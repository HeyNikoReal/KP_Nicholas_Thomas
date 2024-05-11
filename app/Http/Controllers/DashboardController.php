<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jabatan;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $jabatan = Jabatan::all();
        $karyawan = User::all();

        $grafik_jk = DB::select("SELECT jenis_kelamin as jk, COUNT(*) as jumlah FROM users GROUP BY jenis_kelamin");

         $grafik_karyawan = DB::select("SELECT nama_jabatan, SUM(CASE WHEN jenis_kelamin = 'Laki-laki' THEN 1 ELSE 0 END) as L, SUM(CASE WHEN jenis_kelamin = 'Perempuan' THEN 1 ELSE 0 END) as P from jabatans join users on jabatans.kode_jabatan = users.kode_jabatan GROUP BY nama_jabatan");

        return view('dashboard')
        ->with('jabatan', $jabatan)
        ->with('karyawan', $karyawan)

        // ->with('grafik_mhs', $grafik_mahasiswa)
        ->with('grafik_jk', $grafik_jk)
        ->with('grafik_karyawan', $grafik_karyawan);

    }
}
