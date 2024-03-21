<?php

namespace App\Http\Controllers;

use App\Models\Datacabang;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function index()
    {
        return view('dataCabangs.login');
    }

    // proses login
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            Session::flash('error', 'Email dan Password harus di isi.');

            return redirect('login')->withInput();
        } else if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication was successful...
            $request->session()->regenerate();

            return redirect('dataCabangs');
        } else {
            Session::flash('error', 'Kamu harus memasukkan identitas dengan benar.');
            return redirect('login');
        }
    }
    
    // fungsi logout
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::flash('success', 'Kamu berhasil keluar');
        return redirect('login');
    }
}
