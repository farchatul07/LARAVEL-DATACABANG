<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\DataCabang;
use App\Models\register;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('dataCabangs.register');
    }

    public function actionregister(Request $request)
    {
        $existingUser = register::where('email', $request->input('email'))->first();

        if ($existingUser) {
            Session::flash('error', 'Email sudah terdaftar. Gunakan email lain.');
            return redirect()->back()->withInput();
        }
        $user = register::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'level' => 'admin'
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        return redirect('login');
    }
}