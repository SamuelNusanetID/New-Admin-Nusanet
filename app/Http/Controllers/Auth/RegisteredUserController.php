<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $datas = [
            'titlePage' => 'Registrasi'
        ];

        return view('auth.register', $datas);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required|confirmed',
                'nama_user' => 'required',
                'email' => 'required', 'email', 'unique:users',
            ],
            [
                'username.required' => 'Field Username Wajib Diisi',
                'password.required' => 'Field Password Wajib Diisi',
                'password.confirmed' => 'Password Tidak Sama',
                'nama_user.required' => 'Field Nama Pengguna Wajib Diisi',
                'email.required' => 'Field Email Wajib Diisi',
                'email.email' => 'Email tidak valid',
                'unique' => 'Email anda sudah terdaftar'
            ]
        );

        $user = User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'nama_user' => $request->nama_user,
            'email' => $request->email,
        ]);

        event(new Registered($user));

        return redirect()->to('login')->with('successMessage', 'Akun anda berhasil ditambahkan. Silahkan verifikasi email anda terlebih dahulu, sebelum anda login.');
    }
}
