<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        DB::table('jabatans')->insert([
            [
                'kode_jabatan' => "B01",
                'nama_jabatan' => "Manager", 
            ],
            [
                'kode_jabatan' => "B02",
                'nama_jabatan' => "Sales",
            ],
            [
                'kode_jabatan' => "B03",
                'nama_jabatan' => "Kepala Gudang",
            ],
            [
                'kode_jabatan' => "B04",
                'nama_jabatan' => "Finansial",
            ],
            [
                'kode_jabatan' => "B05",
                'nama_jabatan' => "Admin",
            ],
            [
                'kode_jabatan' => "B06",
                'nama_jabatan' => "Direktur",
            ],
            [
                'kode_jabatan' => "B07",
                'nama_jabatan' => "Supir",
            ],
            [
                'kode_jabatan' => "B088",
                'nama_jabatan' => "Jadikan B08",
            ],
            [
                'kode_jabatan' => "B09",
                'nama_jabatan' => "Editin Dong",   
            ],
            [
                'kode_jabatan' => "B10",
                'nama_jabatan' => "Hapus Saya",
            ],
        ]);
    }
}
