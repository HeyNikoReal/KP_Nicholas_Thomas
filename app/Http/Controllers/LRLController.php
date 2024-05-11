<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LRLController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|max:15',
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        $username = $request->username;

        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();
        Session::flash('message', $username);

        return redirect('/register');
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     $email = $request->email;
    //     $password = $request->password;

    //     $user = User::where('email', $email)->first();
    //     if ($user && Hash::check($password, $user->password)) {
    //             Auth::login($user);
    //             return redirect('/dashboard');
    //     }

    //     Session::flash('error');
    //     return redirect('/login');
    // }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            // Cek apakah kode_karyawan dimulai dengan huruf 'A'
            $role = (substr($user->kode_karyawan, 0, 1) === 'A') ? 'admin' : 'karyawan';

            if ($role === 'admin') {
                // Redirect ke halaman admin jika peran adalah admin
                Auth::login($user);
                return redirect('/admin-dashboard');
            } elseif ($role === 'karyawan') {
                // Redirect ke halaman karyawan jika peran adalah karyawan
                Auth::login($user);
                return redirect('/karyawan-dashboard');
            }
        }

        // Jika login gagal, kembalikan ke halaman login
        Session::flash('error');
        return redirect('/login');
    }
}