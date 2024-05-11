<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'email'=>"nicholas@gmail.com",
                'password'=>Hash::make(12345678),
                'kode_karyawan'=>"A01",
                'nama_karyawan'=>"Nicholas",
                'kode_jabatan'=>"B01", 
                'jenis_kelamin'=>"Laki-laki", 
                'tempat_lahir'=>"Lubuklinggau",
                'tanggal_lahir'=>"2003-11-09", 
                'alamat'=>"Jalan Riau", 
                'agama'=>"Buddha", 
                'nomor_telepon'=>"081271590161",
            ],
            [
                'email'=>"selvie@gmail.com",
                'password'=>Hash::make(12345678),
                'kode_karyawan'=>"A02",
                'nama_karyawan'=>"Selvie Tan",
                'kode_jabatan'=>"B01", 
                'jenis_kelamin'=>"Perempuan", 
                'tempat_lahir'=>"Palembang",
                'tanggal_lahir'=>"2003-10-02", 
                'alamat'=>"Sukamakmur", 
                'agama'=>"Buddha", 
                'nomor_telepon'=>"081212343456",
            ],
            [
                'email'=>"user@gmail.com",
                'password'=>Hash::make(12345678),
                'kode_karyawan'=>"K01",
                'nama_karyawan'=>"Margaretha",
                'kode_jabatan'=>"B02", 
                'jenis_kelamin'=>"Perempuan", 
                'tempat_lahir'=>"Palembang",
                'tanggal_lahir'=>"1990-10-10", 
                'alamat'=>"Jalan Riau", 
                'agama'=>"Kristen", 
                'nomor_telepon'=>"085366542846",
            ],
            [
                'email'=>"user2@gmail.com",
                'password'=>Hash::make(12345678),
                'kode_karyawan'=>"K02",
                'nama_karyawan'=>"Albertus Dwi Andhika P.D",
                'kode_jabatan'=>"B03", 
                'jenis_kelamin'=>"Laki-laki", 
                'tempat_lahir'=>"Jakarta",
                'tanggal_lahir'=>"2002-12-20", 
                'alamat'=>"Sako", 
                'agama'=>"Katolik", 
                'nomor_telepon'=>"086752946723",
            ],
            [
                'email'=>"user3@gmail.com",
                'password'=>Hash::make(12345678),
                'kode_karyawan'=>"K03",
                'nama_karyawan'=>"Muhammad Ali",
                'kode_jabatan'=>"B088", 
                'jenis_kelamin'=>"Laki-laki", 
                'tempat_lahir'=>"Merasi",
                'tanggal_lahir'=>"1989-12-31", 
                'alamat'=>"Sako", 
                'agama'=>"Katolik", 
                'nomor_telepon'=>"089876012345",
            ],
        ]);
    }
}
